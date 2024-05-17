@yield('contacto')

<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contacteme</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form action="{{ route('messages.store') }}" method="POST">

                    @csrf
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" type="text" name="nombre" id="nombre" required>
                        <label for="nombre">Nombre:</label>
                      
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" type="email" name="email" id="email" required>
                        <label for="email">Email:</label>
                      
                    {{-- </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="telefono" type="telefono" placeholder="(123) 456-7890"
                         required/>
                        <label for="telefono">Numero de telefono</label>
                        
                    </div> --}}
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control"name="mensaje" id="mensaje" required></textarea>
                        <label for="mensaje">Mensaje:</label>
                        
                    </div>
                    {{-- <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a
                                href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Error sending message!</div>
                    </div> --}}
                    <!-- Submit Button-->
                    {{-- <button class="btn btn-primary btn-xl disabled" id="submit" type="submit">Enviar</button> --}}

                    <button class="btn btn-primary btn-xl enable" type="submit">Enviar mensaje</button>
                </form>



                <!-- resources/views/messages/create.blade.php -->
{{-- 
<form action="{{ route('messages.store') }}" method="POST">
    @csrf

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="mensaje">Mensaje:</label>
    <textarea name="mensaje" id="mensaje" required></textarea>

    <button type="submit">Enviar mensaje</button>
</form> --}}


            </div>
        </div>
    </div>
</section>
