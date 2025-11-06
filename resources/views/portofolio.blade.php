<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <!-- Bootstrap CSS -->
    <!-- Liandy Hayanto Ardi 41523010103 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }
        html, body {
            overflow-x: hidden;
            width: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            background-color: #f5f5f5;
            padding: 10px;
        }
        .container-fluid {
            padding-left: 10px;
            padding-right: 10px;
            max-width: 100%;
            overflow-x: hidden;
        }
        .row {
            margin-left: 0;
            margin-right: 0;
        }
        [class*="col-"] {
            padding-left: 5px;
            padding-right: 5px;
        }
        .frame {
            background-color: #fdd;
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 4px;
            box-shadow: 2px 2px 4px rgba(0,0,0,0.1);
            word-wrap: break-word;
            overflow-wrap: break-word;
            max-width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .frame.first-frame {
            background-color: #ff9944;
        }
        .frame-container {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .row {
            margin-left: 0;
            margin-right: 0;
            margin-bottom: 10px;
        }
        .row.equal-height {
            display: flex;
            flex-wrap: wrap;
        }
        .row.equal-height > [class*="col-"] {
            display: flex;
            flex-direction: column;
        }
        .frame h3 {
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }
        .frame h4 {
            font-size: 1rem;
        }
        .scrolling-text {
            background-color: #333;
            color: #0f0;
            padding: 10px;
            font-family: monospace;
            overflow: hidden;
            white-space: nowrap;
            font-size: 0.9rem;
        }
        .scrolling-text span {
            display: inline-block;
            animation: scroll 10s linear infinite;
        }
        @keyframes scroll {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .blinking {
            animation: blink 1s infinite;
        }

        /* Navigation Buttons */
         .navigation {
            position: fixed;
            bottom: 20px;
            left: 20px;
            right: 20px;
            z-index: 400;
            display: flex;
            justify-content: space-between;
         }
         .nav-btn {
            padding: 12px 24px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
         }
         .nav-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0,0,0,0.4);
         }
         .btn-prev {
            background-color: #2196F3;
            color: white;
         }
         .btn-prev:hover {
            background-color: #0b7dda;
         }

        @keyframes blink {
            0%, 50% { opacity: 1; }
            51%, 100% { opacity: 0; }
        }
        .alert-reminder {
            background-color: #ff6;
            border: 2px solid #f90;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 0.9rem;
        }
        .frame img {
            max-width: 100%;
            height: auto;
        }
        .frame ul {
            padding-left: 20px;
        }
        .frame p, .frame li, .frame a {
            font-size: 0.95rem;
            word-break: break-word;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            body {
                padding: 5px;
            }
            .container-fluid {
                padding-left: 5px;
                padding-right: 5px;
            }
            [class*="col-"] {
                padding-left: 3px;
                padding-right: 3px;
            }
            .frame {
                padding: 10px;
                margin-bottom: 4px;
            }
            .frame h3 {
                font-size: 1.1rem;
            }
            .frame h4 {
                font-size: 0.95rem;
            }
            .scrolling-text {
                font-size: 0.8rem;
                padding: 8px;
            }
            .alert-reminder {
                padding: 8px;
                font-size: 0.85rem;
            }
            .frame p, .frame li, .frame a {
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 576px) {
            body {
                padding: 3px;
            }
            .container-fluid {
                padding-left: 3px;
                padding-right: 3px;
            }
            [class*="col-"] {
                padding-left: 2px;
                padding-right: 2px;
            }
            .frame {
                padding: 8px;
                margin-bottom: 4px;
            }
            .frame h3 {
                font-size: 1rem;
                margin-bottom: 10px;
            }
            .frame h4 {
                font-size: 0.9rem;
            }
            .scrolling-text {
                font-size: 0.75rem;
                padding: 6px;
            }
            .alert-reminder {
                padding: 6px;
                font-size: 0.8rem;
            }
            .frame p, .frame li, .frame a {
                font-size: 0.85rem;
            }
            h2 {
                font-size: 1rem;
                padding: 0 5px;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">  
        <!-- First Frame: Name and Address -->
        <div class="row">
            <div class="col-12">
                <div class="frame first-frame">
                    <h3>First Frame: Name and address</h3>
                    <p><strong>Name:</strong> Liandy Hayanto Ardi</p>
                    <p><strong>Address:</strong> Jl. Merdeka No. 123, Jakarta, Indonesia</p>
                </div>
            </div>
        </div>

        <!-- Second and Third Frame -->
        <div class="row equal-height">
            <div class="col-12 col-md-6">
                <div class="frame">
                    <h3>Second frame</h3>
                    <h4>Bulleted list of qualifications</h4>
                    <ul>
                        <li>Bachelor's Degree in Computer Science</li>
                        <li>5+ years experience in Web Development</li>
                        <li>Proficient in Laravel, PHP, and JavaScript</li>
                        <li>Strong understanding of Bootstrap and responsive design</li>
                        <li>Experience with MySQL and database design</li>
                        <li>Excellent problem-solving skills</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="frame">
                    <h3>Third frame</h3>
                    <h4>Links to favourite sites</h4>
                    <ul>
                        <li><a href="https://laravel.com" target="_blank">Laravel Framework</a></li>
                        <li><a href="https://getbootstrap.com" target="_blank">Bootstrap Official</a></li>
                        <li><a href="https://github.com" target="_blank">GitHub</a></li>
                        <li><a href="https://stackoverflow.com" target="_blank">Stack Overflow</a></li>
                        <li><a href="https://www.php.net" target="_blank">PHP Documentation</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Fourth, Fifth, and Sixth Frame -->
        <div class="row equal-height">
            <div class="col-12 col-md-4">
                <div class="frame">
                    <h3>Fourth frame</h3>
                    <h4>Scrolling message</h4>
                    <div class="scrolling-text">
                        <span>Selamat datang di portofolio saya! ini adalah scrolling message yang dibuat dengan Bootstrap DAN Blade PHP...</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="frame">
                    <h3>Fifth frame</h3>
                    <h4>Blinking reminders</h4>
                    <div class="alert-reminder blinking">
                        <strong>⚠️ Peringatan Penting!</strong>
                    </div>
                    <div class="alert-reminder blinking">
                        Jangan lupa cek email hari ini!
                    </div>
                    <div class="alert-reminder blinking">
                        <strong>🔔 Meeting di jam 3 PAGI! 🤯</strong>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="frame">
                    <h3>Sixth frame</h3>
                    <h4>Image</h4>
                    <img src="{{ asset('images/kucing.JPG') }}"
                    alt="Portofolio Image"
                    class="img-fluid rounded">
                    <p class="mt-2"><small>Sample portfolio image</small></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Buttons -->
      <div class="navigation">
         <a href="{{ url('/dom') }}" class="nav-btn btn-prev">Next -></a>
      </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>