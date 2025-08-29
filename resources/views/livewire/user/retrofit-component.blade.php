<style>
    .retrofit-title {
        background: linear-gradient(to right, #0d47a1, #000);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-weight: 700;
    }

    .retrofit-section h3 {
        color: #0d47a1;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .retrofit-section ul li,
    .retrofit-section ol li {
        margin-bottom: 0.75rem;
        line-height: 1.6;
    }

    .retrofit-section img {
        max-height: 250px;
        object-fit: cover;
        border: 1px solid #ddd;
    }

    .retrofit-section .btn-primary {
        background-color: #0d47a1;
        border-color: #0d47a1;
    }

    .retrofit-section .btn-primary:hover {
        background-color: #06327a;
        border-color: #06327a;
    }
</style>

<div class="container py-5 retrofit-section">
    <div class="text-center mb-5">
        <h1 class="display-5 retrofit-title">Revolving Door Retrofitting Services</h1>
        <p class="lead">Modernize. Enhance. Extend the Life of Your Investment.</p>
    </div>

    <div class="row mb-5 align-items-center">
        <div class="col-md-6">
            <p>Is your revolving door outdated, inefficient, or not meeting today's safety and accessibility standards? Retrofitting is the smart, cost-effective solution to upgrade your existing revolving door without a full replacement.</p>
            <p><strong>Sliding Doors</strong> specializes in retrofitting revolving doors for commercial, institutional, and hospitality properties. Whether you're looking to improve energy efficiency, upgrade aesthetics, integrate modern access control, or meet current building codes, our expert team delivers tailored solutions that extend the life of your entry systems.</p>
        </div>
        <div class="col-md-6 d-flex flex-wrap justify-content-center">
            <img src="{{ asset('images/retrofit-1.jpeg') }}" alt="Retrofit Image 1" class="img-fluid rounded m-2">
            <img src="{{ asset('images/retrofit-2.jpeg') }}" alt="Retrofit Image 2" class="img-fluid rounded m-2">
        </div>
    </div>

    <div class="mb-5">
        <h3>Why Retrofit Your Revolving Door?</h3>
        <ul>
            <li><strong>Cost-Efficient:</strong> Saves money by reusing existing structural components.</li>
            <li><strong>Improved Performance:</strong> Add modern drive systems, sensors, and climate control integration.</li>
            <li><strong>ADA & Code Compliance:</strong> Meet the latest accessibility and safety standards.</li>
            <li><strong>Enhanced Aesthetics:</strong> Upgrade finishes, glass, and framing for a modern look.</li>
            <li><strong>Smart Access Integration:</strong> Incorporate keycard, mobile, or biometric security systems.</li>
        </ul>
    </div>

    <div class="mb-5">
        <h3>What We Can Retrofit</h3>
        <ul>
            <li>Manual or automatic revolving doors</li>
            <li>Drive mechanisms and control systems</li>
            <li>Canopies, glazing, and hardware</li>
            <li>Sensors, speed controls, and safety devices</li>
            <li>Access control and building management integration</li>
        </ul>
    </div>

    <div class="mb-5">
        <h3>Our Process</h3>
        <ol>
            <li><strong>Assessment:</strong> We inspect your current system and identify upgrade opportunities.</li>
            <li><strong>Design & Engineering:</strong> Develop a retrofit plan tailored to your needs.</li>
            <li><strong>Installation:</strong> Retrofit performed by certified technicians with minimal disruption.</li>
            <li><strong>Testing & Commissioning:</strong> We ensure functionality and regulatory compliance.</li>
        </ol>
    </div>

    <div class="mb-5">
        <h3>Serving All Major Brands</h3>
        <p>We retrofit all major manufacturers including Dormakaba, Boon Edam, Geze, Assa Abloy, Doormax, G-U, Blasi, KBB.</p>
    </div>

    <div class="mb-5">
        <h3>Advanced Smart Control Panel</h3>
        <p>Our control panel features advanced smart software capable of operating any type of AC or DC motor.</p>
        <p>Motor specifications must be configured using our service tools, followed by calibration based on the door’s size, weight, and height. The software automatically calculates all parameters to ensure smooth operation, incorporating EN 16005-compliant safety features.</p>
    </div>

    <div class="text-center mt-5">
        <h4>Start Your Retrofit Project Today</h4>
        <p>Contact us for a free on-site assessment and discover how a revolving door retrofit can improve your building’s performance, appearance, and compliance.</p>
        <a href="{{ route('contact') }}" class="btn btn-primary px-5 py-2">Request a Free Assessment</a>
    </div>
</div>
