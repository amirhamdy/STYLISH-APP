@extends('master')
@section('title', 'Contact Page')
@section('banner')
    @include('shared.small_banner')
@endsection
@section('content')
    <!--contact-->
    <div class="contact">
        <div class="container">
            <div class="contact-grids">
                <div class="col-md-8 map">
                    <h1 class="hdng">How to find us</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.182370726!2d-0.10159865000000001!3d51.52864165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1433744055746"></iframe>
                </div>
                <div class="col-md-4 address">
                    <h2>Contact info</h2>
                    <p class="cnt-p">***</p>
                    <p>STYLISH LTD</p>
                    <p>16 St El-Salam, Cairo</p>
                    <p>Telephone : +20 1006173486</p>
                    <p>Email : <a href="mailto:amirhamdy4@gmail.com">amirhamdy4@gmail.com</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class=" contact-form">
                <h3 class="title">Contact form</h3>
                <form>
                    <div class="col-md-6 form-grids">
                        <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Name';
                                    }" required="">
                        <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Email';
                                    }" required="">
                        <input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Telephone';
                                    }" required="">
                    </div>
                    <div class="col-md-6 form-grids">
                            <textarea onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Message...';
                                    }" required="">Message...</textarea>
                        <input type="submit" value="Submit">
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
    <!--//contact-->
@endsection