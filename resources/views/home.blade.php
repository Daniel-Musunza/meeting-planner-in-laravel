@extends('layouts.app')

@section('content')
   
<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">
                
                <noscript>
                    <div class="alert alert-icon-left alert-danger alert-dismissible mb-2" id="no-script" role="alert">
                        <span class="alert-icon"><i class="fa fa-info"></i></span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        For full functionality of this site it is necessary to enable JavaScript.
                        Here are the <a href="">
                            instructions how to enable JavaScript in your web browser</a>.
                    </div>
                </noscript>
                <section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-5 box-shadow-2 p-0 plain-container">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <div class="p-1">
                            <h3>New Meeting</h3>
                          
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body login">
                     
                        <form class="form-horizontal form-simple" method="POST" action="">
                            <input type="hidden" name="_token" >                          
                              <fieldset class="form-group position-relative has-icon-left">
                                <input type="text"
                                    class="form-control form-control-lg input-lg "

                                    placeholder="Title" required>
                                <div class="form-control-position">
                                   
                                </div>
                              </fieldset>
                              <fieldset class="form-group position-relative has-icon-left">
                                <input type="text"
                                    class="form-control form-control-lg input-lg "
                                    placeholder="Platform (zoom, Google meet, etc)">
                              
                              </fieldset>
                              <fieldset class="form-group position-relative has-icon-left">
                                <input type="text"
                                    class="form-control form-control-lg input-lg "
                                    placeholder="Link">
                              
                              </fieldset>
                              
                              <fieldset class="form-group position-relative has-icon-left">
                                <input type="date"
                                      class="form-control form-control-lg input-lg"
                                      required
                                      placeholder="Select a date">
                                <div class="form-control-position">
                                </div>
                              </fieldset>

                              <fieldset class="form-group position-relative has-icon-left">
                                <input type="time"
                                      class="form-control form-control-lg input-lg"
                                      required
                                      placeholder="Select a time">
                                <div class="form-control-position">
                                </div>
                              </fieldset>

                            <button type="submit" @click.prevent="addreminder()" class="btn blue-bg btn-lg btn-block">
                              Add
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
 </div>
</div>
    </div>
@endsection
