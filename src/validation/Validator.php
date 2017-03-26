<?php 
namespace BetterBeing\Validation;


use Respect\Validation\Validator as Valid;

class Validator
{
    public function isValid($validation_data)
    {
        
        $errors = [];
        
        foreach ($validation_data as $name => $value) {
            
            // getting array ['first_name' => 'min:3', 'last_name' => 'min:3']
            if (isset($_REQUEST[$name])) {
                
                $rules = explode("|", $value);
                
                foreach ($rules as $rule){
                    
                    $exploded = explode(":", $rule);

                    switch ($exploded[0]) {
                        case 'length';
                            $length = $exploded[1];
                            if (Valid::stringType()->length($length)->Validate($_REQUEST[$name]) == false) {
                                $errors[] = $name . " must be entered."; 
                            }
                            break;

                        case 'email':

                            if (Valid::email()->Validate($_REQUEST[$name]) == false){
                                $errors[] = "Please enter a valid email address!";
                            }
                            break;

                        case 'equalTo':
                            if (Valid::equals($_REQUEST[$name])->Validate($_REQUEST[$exploded[1]]) == false){
                                $errors[] = "Value does not match verification value!";
                            }
                            break;
                            
                        case 'min':
                            $min = $exploded[1];
                            if (Valid::stringType()->length($min)->Validate($_REQUEST[$name]) == false) {
                                $errors[] = "Must be at least " . $min . " characters long!"; 
                            }
                            break;

                        default:
                            // do nothing
                    }
                }
            } else {
                $errors[] = "No value found!";
            }
        }
        return $errors;
    }
}