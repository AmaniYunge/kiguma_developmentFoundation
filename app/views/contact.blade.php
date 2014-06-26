@extends('master')

@section('content')
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Contact Us</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="/">Home</a> <span class="divider">/</span></li>
                    <li class="active">Contacts</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / .title -->
<section class="no-margin">
    <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31832.228154886256!2d33.190134149999984!3d-4.214690699999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19ca0739b194ffff%3A0x6da97f379ca92855!2sNzega!5e0!3m2!1sen!2s!4v1398716582191" width="600" height="450" frameborder="0" style="border:0"></iframe>
</section>

<section id="contact-page" class="container">
    <div class="row-fluid">

        <div class="span8">
            <h4>Contact Form</h4>
            <div class="status alert alert-success" style="display: none"></div>

            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="{{ url('sendemail') }}">
                <div class="row-fluid">
                    <div class="span5">
                        <label>First Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your First Name" name="fname">
                        <label>Last Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your Last Name" name="lname">
                        <label>Email Address</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your email address" name="email">
                    </div>
                    <div class="span6">
                        <label>Message</label>
                        <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button>
                <p> </p>

            </form>
            <div id="output"></div>
        </div>

        <div class="span4">
            <h3>Our Address</h3>
            <h4>Head Quaters(Ushirika street/Nzega District)</h4>

             <h5>  <i class="icon-user"></i><strong>Executive Director</strong></h5>

                Nzega District, Tabora


            <p>
                 P.o.Box 80,Nkinga-Tabora.<br>Tanzania-East Africa
            </p>
            <p>
                <i class="icon-envelope"></i> &nbsp;pskdf@hotmail.com
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;+255 787 550 250
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;www.kigumadevelopmentfoundation.org
            </p>
        </div>

    </div>

</section>
<script>
    $(document).ready(function (){
        $('#main-contact-form').on('submit', function(e) {
            e.preventDefault();
            $("#output").html("<h3><i class='fa fa-spin fa-spinner '></i><span>Sending... please wait...</span><h3>");
            setTimeout(function() {
                $("#output").html("<h3>Thank you for your feedback</h3>");
            },2000);
            $(this).ajaxSubmit({
                target: '#output',
                success:  afterSuccess
            });

        });
        function afterSuccess(){
            setTimeout(function() {
                $("#output").fadeOut().html("").fadeIn();
            },2000);
        }
    });
</script>

@stop
