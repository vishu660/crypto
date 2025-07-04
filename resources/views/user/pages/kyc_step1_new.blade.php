<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Get You Verified</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background: #181c24; color: #fff; }
        .kyc-card { background: #181c24; border-radius: 18px; box-shadow: 0 0 24px #0004; }
        .digilocker-card { border: 2px solid #fff; border-radius: 12px; padding: 1.2rem; display: flex; align-items: center; margin-bottom: 1rem; background: #10141a; }
        .digilocker-card img { height: 48px; margin-right: 1rem; }
        .digilocker-badge { background: #0f5132; color: #fff; font-size: 0.9rem; border-radius: 6px; padding: 0.2rem 0.7rem; margin-left: 1rem; }
        .form-label { color: #fff; }
        .form-select, .form-control { background: #181c24; color: #fff; border: 1px solid #444; }
        .form-select:focus, .form-control:focus { border-color: #ffc107; box-shadow: 0 0 0 0.2rem #ffc10744; }
        .btn-yellow { background: #ffd740; color: #222; font-weight: 600; border-radius: 10px; }
        .btn-yellow:hover { background: #ffe066; color: #111; }
        .alt-link { color: #ffc107; font-size: 1rem; }
        .alt-link:hover { text-decoration: underline; color: #fffbe7; }
        .flag-icon { width: 28px; margin-right: 8px; }
        .country-option { display: flex; align-items: center; }
        .country-flag { width: 22px; margin-right: 8px; }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="kyc-card p-5">
                <div class="mb-4" style="border-bottom: 3px solid #ffd740; width: 60px;"></div>
                <h2 class="fw-bold mb-4" style="font-size:2.2rem;">Let's Get You Verified</h2>
                <form action="{{ route('user.pages.share_pan') }}" method="GET">
                    <div class="mb-4">
                        <label class="form-label">Residence</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark border-0">
                                <img src="https://flagcdn.com/w40/in.png" class="flag-icon" id="residence-flag" alt="India">
                            </span>
                            <select class="form-select" id="residence-select" name="residence">
                                <option value="in" data-flag="https://flagcdn.com/w40/in.png" selected>India (भारत)</option>
                                <option value="us" data-flag="https://flagcdn.com/w40/us.png">United States</option>
                                <option value="gb" data-flag="https://flagcdn.com/w40/gb.png">United Kingdom</option>
                                <option value="ca" data-flag="https://flagcdn.com/w40/ca.png">Canada</option>
                                <option value="au" data-flag="https://flagcdn.com/w40/au.png">Australia</option>
                                <option value="de" data-flag="https://flagcdn.com/w40/de.png">Germany</option>
                                <option value="fr" data-flag="https://flagcdn.com/w40/fr.png">France</option>
                                <option value="jp" data-flag="https://flagcdn.com/w40/jp.png">Japan</option>
                                <option value="cn" data-flag="https://flagcdn.com/w40/cn.png">China</option>
                                <option value="za" data-flag="https://flagcdn.com/w40/za.png">South Africa</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Nationality</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark border-0">
                                <img src="https://flagcdn.com/w40/in.png" class="flag-icon" id="nationality-flag" alt="India">
                            </span>
                            <select class="form-select" id="nationality-select" name="nationality">
                                <option value="in" data-flag="https://flagcdn.com/w40/in.png" selected>India (भारत)</option>
                                <option value="us" data-flag="https://flagcdn.com/w40/us.png">United States</option>
                                <option value="gb" data-flag="https://flagcdn.com/w40/gb.png">United Kingdom</option>
                                <option value="ca" data-flag="https://flagcdn.com/w40/ca.png">Canada</option>
                                <option value="au" data-flag="https://flagcdn.com/w40/au.png">Australia</option>
                                <option value="de" data-flag="https://flagcdn.com/w40/de.png">Germany</option>
                                <option value="fr" data-flag="https://flagcdn.com/w40/fr.png">France</option>
                                <option value="jp" data-flag="https://flagcdn.com/w40/jp.png">Japan</option>
                                <option value="cn" data-flag="https://flagcdn.com/w40/cn.png">China</option>
                                <option value="za" data-flag="https://flagcdn.com/w40/za.png">South Africa</option>
                            </select>
                        </div>
                    </div>
                    <div class="digilocker-card mb-2">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Aadhaar_Logo.svg" alt="Aadhaar">
                        <div class="flex-grow-1">
                            <span class="fw-bold fs-5">Verify with DigiLocker</span>
                            <span class="digilocker-badge">Recommended</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="{{ route('user.pages.document_verification') }}" class="alt-link">Don't have Aadhaar Number? Verify with ID document</a>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-yellow btn-lg">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // Update flag icon on select change
    document.getElementById('residence-select').addEventListener('change', function() {
        var flag = this.options[this.selectedIndex].getAttribute('data-flag');
        document.getElementById('residence-flag').src = flag;
        document.getElementById('residence-flag').alt = this.options[this.selectedIndex].text;
    });
    document.getElementById('nationality-select').addEventListener('change', function() {
        var flag = this.options[this.selectedIndex].getAttribute('data-flag');
        document.getElementById('nationality-flag').src = flag;
        document.getElementById('nationality-flag').alt = this.options[this.selectedIndex].text;
    });
</script>
</body>
</html> 