<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Verification</title>
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
        .country-flag { width: 28px; margin-right: 8px; }
        .selectable-card { background: #10141a; border: 2px solid #222; border-radius: 14px; padding: 1.2rem; margin-bottom: 1rem; display: flex; align-items: center; cursor: pointer; transition: border-color 0.2s, box-shadow 0.2s; }
        .selectable-card.selected, .selectable-card:hover { border-color: #ffd740; box-shadow: 0 0 0 2px #ffd74044; }
        .selectable-card i, .selectable-card img { font-size: 1.7rem; margin-right: 1rem; }
        .selectable-card .fw-bold { font-size: 1.1rem; }
        .section-title { font-size: 1.1rem; color: #fffbe7; margin-bottom: 0.5rem; margin-top: 2rem; }
        .divider { border-bottom: 3px solid #ffd740; width: 60px; margin-bottom: 1.5rem; }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="kyc-card p-5">
                <div class="divider"></div>
                <h2 class="fw-bold mb-4" style="font-size:2.2rem;">Document Verification</h2>
                <form action="{{ route('user.pages.share_pan') }}" method="GET">
                    <div class="mb-4">
                        <label class="form-label">Document Issuing Country/Region</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark border-0">
                                <img src="https://flagcdn.com/w40/in.png" class="country-flag" id="country-flag" alt="India">
                            </span>
                            <select class="form-select" id="country-select" name="country">
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
                    <div class="section-title">Document Type</div>
                    <div class="digilocker-card mb-3 selectable-card selected" onclick="selectCard(this)">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6e/Aadhaar_Logo.svg" alt="Aadhaar">
                        <div class="flex-grow-1">
                            <span class="fw-bold fs-5">Verify with DigiLocker</span>
                            <span class="digilocker-badge">Recommended</span>
                        </div>
                    </div>
                    <div class="selectable-card mb-3" onclick="selectCard(this)">
                        <i class="bi bi-credit-card-2-front"></i>
                        <span class="fw-bold">Aadhaar card</span>
                    </div>
                    <div class="selectable-card mb-3" onclick="selectCard(this)">
                        <i class="bi bi-passport"></i>
                        <span class="fw-bold">Passport</span>
                    </div>
                    <div class="selectable-card mb-3" onclick="selectCard(this)">
                        <i class="bi bi-card-heading"></i>
                        <span class="fw-bold">Driver's License</span>
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
    document.getElementById('country-select').addEventListener('change', function() {
        var flag = this.options[this.selectedIndex].getAttribute('data-flag');
        document.getElementById('country-flag').src = flag;
        document.getElementById('country-flag').alt = this.options[this.selectedIndex].text;
    });
    // Card selection logic
    function selectCard(card) {
        document.querySelectorAll('.selectable-card').forEach(function(el) {
            el.classList.remove('selected');
        });
        card.classList.add('selected');
    }
</script>
</body>
</html> 