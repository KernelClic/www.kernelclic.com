<?php include 'header.php'; ?>

<section class="page-header">
    <div class="container">
        <h1>Contáctanos</h1>
        <p>Estamos listos para escuchar tus necesidades.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-info animate-on-scroll">
                <h2>Información de Contacto</h2>
                <p>Ponte en contacto con nosotros a través de cualquiera de nuestros canales.</p>

                <div class="info-item">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <h4>Teléfono</h4>
                        <p>+57 314 725 9648</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>info@kernelclic.com</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fas fa-globe"></i>
                    <div>
                        <h4>Sitio Web</h4>
                        <p>www.kernelclic.com</p>
                    </div>
                </div>

                <div class="social-links-contact">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="contact-form-container animate-on-scroll">
                <form id="contactForm" action="#" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="empresa">Empresa</label>
                        <input type="text" id="empresa" name="empresa">
                    </div>

                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Optional Map Section -->
<section class="map-section">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.923456789!2d-74.0!3d4.6!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zM!5e0!3m2!1ses!2sco!4v1600000000000!5m2!1ses!2sco"
        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<?php include 'footer.php'; ?>