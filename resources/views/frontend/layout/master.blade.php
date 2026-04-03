<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset('assets/images/logo/fav.png')}}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/color.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/prettyPhoto.css')}}">
    <!--Rev Slider Start-->
    <link rel="stylesheet" href="{{url('assets/js/rev-slider/css/settings.css')}}" type='text/css' media='all' />
    <link rel="stylesheet" href="{{url('assets/js/rev-slider/css/layers.css')}}" type='text/css' media='all' />
    <link rel="stylesheet" href="{{url('assets/js/rev-slider/css/navigation.css')}}" type='text/css' media='all' />
    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!--Rev Slider End-->
    <title>@yield('title')</title>
    <style>
        .nodalreg-group select {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d6dce5;
            border-radius: 8px;
            font-size: 15px;
            color: #2c3e50;
            background-color: #fff;
            outline: none;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        /* focus effect */
        .nodalreg-group select:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.1rem rgba(13, 110, 253, .25);
        }

        /* dropdown arrow */
        .nodalreg-group {
            position: relative;
        }

        .nodalreg-group select {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' fill='%23666' viewBox='0 0 16 16'%3E%3Cpath d='M1.5 5l6 6 6-6' stroke='%23666' stroke-width='2' fill='none'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 14px;
        }

        .influencer-registration-section {
            background: #f3f5f9;
            padding: 50px 20px;
        }

        .influencer-registration-container {
            max-width: 800px;
            margin: auto;
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        }

        .influencer-registration-topbar {
            background: var(--primary-color);
            padding: 20px 15px 18px;
            text-align: center;
        }

        .influencer-registration-topbar-title {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            color: var(--secondary-color);
        }

        .influencer-registration-topbar-subtitle {
            margin-top: 6px;
            font-size: 13px;
            color: #cbd5e1;
        }

        /* STEP HEADER */
        .influencer-registration-step-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--primary-color);
            padding: 18px 16px 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .influencer-registration-step-indicator {
            flex: 1;
            text-align: center;
            font-size: 14px;
            color: #cbd5e1;
        }

        .influencer-registration-step-indicator::before {
            content: attr(data-step);
            display: block;
            width: 42px;
            height: 42px;
            margin: 0 auto 8px;
            border-radius: 50%;
            background: #163b61;
            color: #ffffff;
            line-height: 42px;
            font-weight: 600;
        }

        .influencer-registration-step-indicator.influencer-registration-step-active {
            color: var(--secondary-color);
        }

        .influencer-registration-step-indicator.influencer-registration-step-active::before {
            background: var(--secondary-color);
            color: #000000;
        }

        .influencer-registration-body {
            padding: 35px 40px 40px;
        }

        /* STEP PANEL */
        .influencer-registration-step-panel {
            display: none;
        }

        .influencer-registration-step-panel.influencer-registration-step-panel-active {
            display: block;
        }

        .influencer-social-heading {
            font-size: 22px;
            font-weight: 600;
            color: var(--primary-color);
            margin: 10px 0 20px;
        }

        .influencer-registration-row {
            display: flex;
            gap: 25px;
            margin-bottom: 18px;
        }

        .influencer-registration-group {
            flex: 1;
            display: flex;
            flex-direction: column;
            margin-bottom: 14px;
        }

        .influencer-registration-full-width {
            width: 100%;
        }

        .influencer-registration-group label {
            font-weight: 600;
            margin-bottom: 7px;
            color: #333;
            font-size: 14px;
        }

        .influencer-registration-group input,
        .influencer-registration-group textarea,
        .influencer-registration-group select {
            font-family: 'Poppins', sans-serif;
            padding: 13px 14px;
            border-radius: 6px;
            border: 1px solid #dcdfe6;
            font-size: 14px;
            outline: none;
            transition: 0.3s ease;
            box-sizing: border-box;
        }

        .influencer-registration-group input::placeholder,
        .influencer-registration-group textarea::placeholder {
            color: #9aa0a6;
        }

        .influencer-registration-group input:focus,
        .influencer-registration-group textarea:focus,
        .influencer-registration-group select:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.12);
        }

        /* INVALID FIELD */
        .influencer-registration-invalid-field {
            border: 1px solid red !important;
            box-shadow: 0 0 0 2px rgba(255, 0, 0, 0.12);
        }

        /* BUTTON ROW */
        .influencer-registration-button-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 24px;
        }

        .influencer-registration-button-row-right {
            justify-content: flex-end;
        }

        /* BUTTONS */
        .influencer-registration-next-button,
        .influencer-registration-submit-button {
            font-family: 'Poppins', sans-serif;
            background: var(--secondary-color);
            color: #000;
            padding: 12px 30px;
            font-size: 15px;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            min-width: 120px;
        }

        .influencer-registration-next-button:hover,
        .influencer-registration-submit-button:hover {
            filter: brightness(0.95);
        }

        .influencer-registration-back-button {
            background: transparent;
            color: var(--primary-color);
            padding: 12px 30px;
            font-size: 15px;
            font-weight: 600;
            border: 1px solid var(--primary-color);
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
            min-width: 120px;
        }

        .influencer-registration-back-button:hover {
            background: var(--primary-color);
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .influencer-registration-row {
                flex-direction: column;
                gap: 0;
            }

            .influencer-registration-container {
                max-width: 100%;
            }

            .influencer-registration-body {
                padding: 25px 30px;
            }

            .influencer-registration-topbar-title {
                font-size: 26px;
            }

            .influencer-social-heading {
                font-size: 20px;
            }

            .influencer-registration-step-header {
                gap: 8px;
                padding: 16px 10px 18px;
            }

            .influencer-registration-step-indicator {
                font-size: 12px;
            }

            .influencer-registration-step-indicator::before {
                width: 36px;
                height: 36px;
                line-height: 36px;
            }

            .influencer-registration-button-row {
                flex-direction: column;
                gap: 12px;
            }

            .influencer-registration-next-button,
            .influencer-registration-back-button,
            .influencer-registration-submit-button {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!--Wrapper Start-->
    <div class="wrapper">


        {{-- header --}}
        @include('frontend.components.common.navbar')

        {{-- content --}}
        @yield('content')


        {{-- footer --}}
        @include('frontend.components.common.footer')











    </div>
    <!--Wrapper End-->



    <!-- Optional JavaScript -->
    <script src="{{url('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('assets/js/jquery-migrate-3.0.1.js')}}"></script>
    <script src="{{url('assets/js/popper.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/mobile-nav.js')}}"></script>
    <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/js/isotope.js')}}"></script>
    <script src="{{url('assets/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{url('assets/js/jquery.countdown.js')}}"></script>
    <script src="{{url('assets/js/custom.js')}}"></script>
    <!--Rev Slider Start-->
    <script type="text/javascript" src="{{url('assets/js/rev-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('assets/js/rev-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/rev-slider.js')}}"></script>
    <script type="text/javascript"
        src="{{url('assets/js/rev-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('assets/js/rev-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('assets/js/rev-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('assets/js/rev-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('assets/js/rev-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('assets/js/rev-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('assets/js/rev-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('assets/js/rev-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript"
        src="{{url('assets/js/rev-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script>
        const form = document.getElementById("sponsorForm");
        const steps = document.querySelectorAll(".form-step");
        const stepIndicators = document.querySelectorAll(".step");

        let currentStep = 0;

        function showStep(index) {
            steps.forEach((step, i) => {
                step.classList.toggle("active", i === index);
                stepIndicators[i].classList.toggle("active", i === index);
            });
        }

        function validateStep(stepIndex) {
            const fields = steps[stepIndex].querySelectorAll("input, textarea, select");
            let isValid = true;

            fields.forEach(field => {
                if (!field.checkValidity()) {
                    field.classList.add("invalid");
                    isValid = false;
                } else {
                    field.classList.remove("invalid");
                }
            });

            if (!isValid) {
                const firstInvalidField = steps[stepIndex].querySelector(":invalid");
                if (firstInvalidField) {
                    firstInvalidField.reportValidity();
                    firstInvalidField.focus();
                }
            }

            return isValid;
        }

        document.querySelectorAll(".next-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                if (validateStep(currentStep)) {
                    if (currentStep < steps.length - 1) {
                        currentStep++;
                        showStep(currentStep);
                    }
                }
            });
        });

        document.querySelectorAll(".back-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });
        });

        form.addEventListener("submit", function (e) {
            if (!validateStep(currentStep)) {
                e.preventDefault();
            }
        });

        document.querySelectorAll("input, textarea, select").forEach(field => {
            field.addEventListener("input", () => {
                if (field.checkValidity()) {
                    field.classList.remove("invalid");
                }
            });

            field.addEventListener("blur", () => {
                if (!field.checkValidity()) {
                    field.classList.add("invalid");
                } else {
                    field.classList.remove("invalid");
                }
            });
        });
    </script>
    @stack('scripts')
</body>

</html>