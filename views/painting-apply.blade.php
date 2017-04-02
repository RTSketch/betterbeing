@extends('base')

        @section('browsertitle')
            Better Being: Painting Badge
        @stop
        
        @section('content')
        <section class ="sticky-prompt"></section>
        <section class ="section-form">
            <div class="row">
                <h2>Apply for the painting badge.</h2>
                
            </div>
            <div class="row medium-row">
                @yield('errormessage')
                <form method="post" id="paintingapplyform" name="paintingapplyform" class="register-form"
                    action="/painting-apply">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="title">Title</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="title" id="title" placeholder="" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="description">Description</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="description" id="description" placeholder="" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <div class="form-group">
                                <label for="imgurl">Proof Image URL</label>
                            </div>
                        </div>
                        <div class="col span-2-of-3">
                            <div class="form-group">
                                <input type="text" name="imgurl" id="imgurl">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Submit">
                    </div>
                </form>

            </div>
        </section>
        @stop

        @section('bottomjs')

        <script>

            $(document).ready(function() {
                
               $("#paintingapplyform").validate();

            }); 

        </script>
        @stop