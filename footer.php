<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="enquiryForm" onsubmit="sendToWhatsApp(); return false;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <!-- Message -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Message*</label>
                        <textarea class="form-control" id="message" rows="3" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Send via WhatsApp</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- WhatsApp Send Script -->
<script>
    function sendToWhatsApp() {
        // Replace with your WhatsApp number in international format (no + or spaces)
        const phoneNumber = "919655378498";

        // Get form values
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();

        // Construct message
        const whatsappMessage = `Hello,%0AMy name is *${name}* (%0AEmail: ${email})%0A%0A${message}`;

        // Build WhatsApp URL
        const url = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;

        // Redirect to WhatsApp
        window.open(url, '_blank');
    }
</script>

<!-- Single page animation -->
<script>
    const fadeIns = document.querySelectorAll('.fade-in');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, { threshold: 0.1 });

    fadeIns.forEach(el => observer.observe(el));
</script>

<!-- go to whatsapp  -->
<script>
    function sendToWhatsApp() {
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const subject = document.getElementById("subject").value;
        const message = document.getElementById("message").value;

        const phoneNumber = "9655378498";

        const text = `Name: ${name}%0AEmail: ${email}%0ASubject: ${subject}%0AMessage: ${message}`;
        const url = `https://wa.me/${phoneNumber}?text=${text}`;

        window.open(url, '_blank');
    }
</script>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">GCS INTERNATIONAL</h3>
                <div class="d-flex flex-column justify-content-start">
                    <p>
                        GCS INTERNATIONAL is a trusted name in the agro-industry, specializing in the supply and
                        distribution of high-quality spices, dry fruits, fresh produce, and other essential agro
                        commodities.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Popular Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About
                        Us</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our
                        Services</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest
                        Blog</a>
                    <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact
                        Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2">
                    <i class="bi bi-geo-alt text-primary me-2"></i>NO.25B , CO-OPERATIVE COLONY2ND CROSS
                    STREET,KRISHNAGIRI,KRISHNAGIRI,TAMIL NADU,,635001
                </p>
                <p class="mb-2">
                    <i class="bi bi-envelope-open text-primary me-2"></i> chandhome65@gmail.com
                </p>
                <p class="mb-0">
                    <i class="bi bi-telephone text-primary me-2"></i>+91 9655378498
                </p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Follow Us</h3>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                            class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
            <div class="col-12">
                <form class="mx-auto" style="max-width: 600px">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email" />
                        <button class="btn btn-primary px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-primary text-light py-4">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-md-0">
                    &copy;
                    <a class="text-white border-bottom" href="#">GCS INTERNATIONAL</a>.
                    All Rights Reserved.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="mb-0">
                    Designed by
                    <a class="text-white border-bottom" href="https://trade4export.com">Trade4Export</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>