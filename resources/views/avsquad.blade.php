@extends('partials.app')

@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" data-bgimage="url(images/background/5.png) bottom">
            <div class="center-y relative text-center" data-scroll-speed="4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="col-md-12 text-center">
                                <h1>AVSQUAD</h1>
                                <p>Empowering Organizations with Comprehensive Management Solutions</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <section class="no-top" data-bgimage="url(images/background/6.png) center">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-md-6">
                        <h3>What is AVSQUAD?</h3>
                        AVSQUAD is an all-in-one management platform designed to help organizations handle various operational aspects, including audits, incidents, investigations, hazards, suppliers, assets, documents, certifications, and health & safety. The system integrates multiple modules to streamline workflows, enhance compliance, and improve overall operational efficiency.
                        <div class="spacer-30"></div>

                        <h3>How does it help you?</h3>
                        AVSQUAD provides organizations with the tools to effectively manage:
                        <div class="row">
                            <div class="col-m-6 mr-5">
                                <ul>
                                    <li>Incident Management</li>
                                    <li>Audit Management</li>
                                    <li>Hazard Management</li>
                                    <li>Supplier Management</li>
                                    <li>Asset Management</li>
                                </ul>
                            </div>
                            <div class="col-m-6">
                                <ul>
                                    <li>Training and Certification</li>
                                    <li>File and Document Management</li>
                                    <li>WHS & Environmental Management</li>
                                    <li>User and Role Management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="images/misc/avsquad.svg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="spacer-double"></div>
            </div>
        </section>

        @include('partials._contactNumber')

    </div>
@endsection
