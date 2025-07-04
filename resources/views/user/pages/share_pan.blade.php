<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share PAN details if available</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #181c24; color: #fff; }
        .main-card { background: #181c24; border-radius: 18px; box-shadow: 0 0 24px #0004; padding: 2.5rem 2rem; }
        .info-box { background: #232733; color: #fffbe7; border-radius: 14px; padding: 1.1rem 1.5rem; margin-bottom: 2rem; font-size: 1.08rem; }
        .consent-card { background: #fff; border-radius: 16px; box-shadow: 0 2px 12px #0002; padding: 1.5rem 1.2rem; margin: 0 auto 2rem auto; max-width: 350px; }
        .consent-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem; }
        .consent-header img { height: 32px; }
        .consent-header .shield { font-size: 2rem; color: #4caf50; margin: 0 10px; }
        .consent-title { font-weight: 600; color: #222; margin-bottom: 0.7rem; }
        .consent-list { font-size: 1rem; color: #222; }
        .consent-list label { margin-bottom: 0.5rem; display: flex; align-items: center; }
        .consent-list input[type=checkbox] { margin-right: 0.7rem; }
        .btn-yellow { background: #ffd740; color: #222; font-weight: 600; border-radius: 10px; }
        .btn-yellow:hover { background: #ffe066; color: #111; }
        .divider { border-bottom: 3px solid #ffd740; width: 60px; margin-bottom: 1.5rem; }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-7">
            <div class="main-card mx-auto">
                <div class="divider"></div>
                <h2 class="fw-bold mb-4" style="font-size:2.2rem;">Share PAN details if available</h2>
                <div class="info-box mb-4">
                    For quicker verification, please select both <b>Aadhaar Card</b> and <b>PAN Verification Record Option (if available)</b> during the last step of verification.
                </div>
                <div class="consent-card">
                    <div class="consent-header mb-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Aadhaar_Logo.svg" alt="DigiLocker" style="height:32px;">
                        <span class="shield">&#x2714;</span>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/57/Binance_Logo.png" alt="Binance" style="height:32px;">
                    </div>
                    <div class="consent-title">Please provide your consent to share the following with <b>Binance</b>:</div>
                    <div class="consent-list">
                        <div class="mb-2"><b>&#9660; Issued Documents (3)</b> <span class="text-primary" style="font-size:0.95rem; cursor:pointer;">Select all</span></div>
                        <label><input type="checkbox" checked disabled> Aadhaar Card (XX4402)</label>
                        <label><input type="checkbox"> Driving License <span class="text-secondary ms-1" style="font-size:0.95rem;">(can be accessed)</span></label>
                        <label><input type="checkbox" checked> PAN Verification Record (XXM3478Q)</label>
                    </div>
                </div>
                <div class="d-grid mt-4">
                    <a href="https://digilocker.meripehchaan.gov.in/public/oauth2/1/authorize?client_id=YOUR_CLIENT_ID&redirect_uri=YOUR_REDIRECT_URI&response_type=code&scope=..." target="_blank" rel="noopener noreferrer" class="btn btn-yellow btn-lg">Continue</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html> 