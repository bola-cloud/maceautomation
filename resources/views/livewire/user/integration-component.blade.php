<style>
    .integration-section {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
    }
    .integration-section h1 {
        font-weight: 700;
        color: #0d47a1;
    }
    .integration-section h3 {
        margin-top: 2rem;
        color: #0d47a1;
        font-weight: 600;
    }
    .integration-section ul,
    .integration-section ol {
        padding-left: 1.25rem;
        line-height: 1.8;
    }
    .integration-section p {
        line-height: 1.8;
        font-size: 1.05rem;
    }
    .integration-section img {
        max-width: 100%;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
    }
    .integration-section .btn-primary {
        background-color: #0d47a1;
        border-color: #0d47a1;
        font-size: 1rem;
        padding: 0.75rem 2rem;
    }
    .integration-section .btn-primary:hover {
        background-color: #08306b;
        border-color: #08306b;
    }
</style>

<div class="container py-5 integration-section">
    <div class="text-center mb-5">
        <h1 class="display-5">Sliding Doors Interface I/O</h1>
        <p class="lead">Powerful BMS Integration for Seamless Building Intelligence</p>
        <img src="{{ asset('images/integration-banner.jpeg') }}" alt="Building Management System Integration" class="img-fluid m-3">
        <img src="{{ asset('images/integration-banner2.jpeg') }}" alt="Building Management System Integration" class="img-fluid m-3">
    </div>

    <p>
        The <strong>Sliding Doors Interface I/O</strong> provides seamless integration with Building Management Systems (BMS), enabling real-time control, status feedback, and alarm monitoring across a wide range of building subsystems. Designed with flexibility, scalability, and interoperability in mind, our interface module ensures your automated entrance systems can fully integrate with other smart infrastructure components within modern buildings.
    </p>

    <h3>Key Features</h3>
    <div class="row">
        <div class="col-md-6">
            <ul>
                <li><strong>Digital and Analog I/O:</strong> Supports a wide variety of input/output configurations for precise control of HVAC, lighting, fire safety, elevators, and security systems.</li>
                <li><strong>Alarm and Event Logging:</strong> Real-time alarm notification and detailed historical event logs ensure operational safety and support preventive maintenance.</li>
                <li><strong>Multi-Protocol Support:</strong> Compatible with Modbus, BACnet, KNX, and other leading BMS communication protocols for universal connectivity.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/control-panel.jpeg') }}" alt="Smart Control Panel">
        </div>
    </div>
    <ul>
        <li><strong>Status Feedback:</strong> Provides feedback on door state (open/closed/locked), fault codes, sensor status, and power condition directly to your BMS.</li>
        <li><strong>Remote Diagnostics:</strong> Enables centralized monitoring, fault detection, and performance analytics via a secure web interface or API.</li>
        <li><strong>Fail-Safe Operation:</strong> Designed with redundancy and fallback logic to maintain basic functionality during system or power faults.</li>
    </ul>

    <h3>Applications</h3>
    <div class="row">
        <div class="col-md-6">
            <ul>
                <li>Commercial building automation and access control</li>
                <li>Hospital integration for hands-free automated access and alarm triggers</li>
                <li>Transportation hubs requiring centralized management of entry systems</li>
                <li>Data centers and secure facilities with environmental monitoring needs</li>
                <li>Hotels and retail environments where comfort, efficiency, and branding matter</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/integration-usecase.jpeg') }}" alt="Integration Use Case">
        </div>
    </div>

    <h3>Integration Workflow</h3>
    <ol>
        <li><strong>Site Analysis:</strong> Evaluate existing BMS infrastructure and define integration touchpoints.</li>
        <li><strong>Module Configuration:</strong> Set up I/O mappings and communication protocols specific to the building environment.</li>
        <li><strong>Testing and Validation:</strong> Simulate real-world events to ensure stability, responsiveness, and security.</li>
        <li><strong>Commissioning:</strong> Deploy the integration with full documentation and training.</li>
    </ol>

    <h3>Why Choose MACE Interface I/O?</h3>
    <ul>
        <li>Developed by automation experts with decades of field experience</li>
        <li>Supports both retrofits and new construction projects</li>
        <li>Customizable for any facility size or complexity</li>
        <li>Backed by technical support and remote assistance</li>
    </ul>

    <div class="text-center mt-5">
        <h4>Looking to Integrate Your Door Systems?</h4>
        <p>Contact our experts today to explore tailored integration packages that boost operational intelligence and simplify facility management.</p>
        <a href="{{ route('contact') }}" class="btn btn-primary">Get Started</a>
    </div>
</div>
