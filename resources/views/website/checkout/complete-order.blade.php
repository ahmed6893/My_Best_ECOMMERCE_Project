@extends('website.master')
@section('body')

    <body>

    <script src="{{asset('/')}}website/assets/js/vendors/validation.js"></script>

    <main>
        <section class="mb-lg-14 mb-8 mt-8">
            <div class="container">
                <div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-body text-success">
                                    <h5>{{session('message')}} </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



    </body>

@endsection
