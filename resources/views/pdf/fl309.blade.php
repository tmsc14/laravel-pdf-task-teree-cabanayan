<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FL-309</title>
    <style>
        {!! file_get_contents(resource_path('css/fl309.css')) !!}
    </style>
</head>
<body>
    <div class="form-header">FL-309</div>
    
    <table class="main-table">
        <!-- Row 1 -->
        <tr>
            <td class="attorney-section">
                <div style="font-size: 6pt; margin-bottom: 3pt; display: flex; justify-content: space-between;">
                    <span>PARTY WITHOUT ATTORNEY OR ATTORNEY</span>
                    <span class="field-spacing">STATE BAR NUMBER:</span>
                </div>
                <div style="margin-bottom: 3pt;">NAME:</div>
                <div style="margin-bottom: 3pt;">FIRM NAME:</div>
                <div style="margin-bottom: 3pt;">STREET ADDRESS:</div>
                <div style="margin-bottom: 3pt; display: flex; justify-content: space-between;">
                    <span>CITY:</span>
                    <span class="field-spacing-state">STATE:</span>
                    <span class="field-spacing-zip">ZIP CODE:</span>
                </div>
                <div style="margin-bottom: 3pt; display: flex; justify-content: space-between;">
                    <span>TELEPHONE NO.:</span>
                    <span class="field-spacing-fax">FAX NO.:</span>
                </div>
                <div style="margin-bottom: 3pt;">E-MAIL ADDRESS:</div>
                <div style="margin-bottom: 2pt;">ATTORNEY FOR <em>(name)</em>:</div>
            </td>
            <td rowspan="3" style="width: 25%; vertical-align: top; padding: 4pt;">
                <div class="for-court-use"><i>FOR COURT USE ONLY</i></div>
            </td>
        </tr>
        
        <!-- Row 2 -->
        <tr>
            <td class="superior-court-cell">
                <div class="superior-court-header">SUPERIOR COURT OF CALIFORNIA, COUNTY OF</div>
                <div class="superior-court-info">STREET ADDRESS:</div>
                <div class="superior-court-info">MAILING ADDRESS:</div>
                <div class="superior-court-info">CITY AND ZIP CODE:</div>
                <div class="superior-court-info last-child">BRANCH NAME:</div>
            </td>
        </tr>
        
        <!-- Row 3 -->
        <tr>
            <td class="case-parties">
                <div class="party-line">PETITIONER/PLAINTIFF:</div>
                <div class="party-line">RESPONDENT/DEFENDANT:</div>
                <div class="party-line">OTHER PARENT/PARTY:</div>
            </td>
        </tr>
        
        <!-- Row 4 -->
        <tr>
            <td>
                <div class="resched-hearing">ORDER ON REQUEST TO RESCHEDULE HEARING</div>
            </td>
            <td>
                <div class="case-number-label">CASE NUMBER:</div>
            </td>
        </tr>
    </table>

    <div class="party-complete-section">
        <p><span class="party-section-label">Party must complete</span> <i><span class="party-section-label-2">items 1, 2, 3, and 4.</span></i></p>
        <ol class="party-numbered-list">
            <li>The hearing is currently scheduled for (date):</li>
            <li>Name of party who filed the Request for Order, order to show cause, or other moving paper is (specify):</li>
            <li>Name of party asking to reschedule the hearing is (specify):</li>
            <li>The request 
                <span class="party-checkbox-container">
                    <div class="party-checkbox"></div>
                    <span class="party-checkbox-label">includes</span>
                </span>
                <span class="party-checkbox-container-2">
                    <div class="party-checkbox"></div>
                    <span class="party-checkbox-label-2">does not include</span>
                </span>
                <span class="temporary-emergency">temporary emergency (ex parte) orders previously issued. <</span>
            </li>
        </ol>

            <span class="court-section-label">The court will complete the rest of this form.</span>

        <div class="court-section-divider"></div>
    </div>

    <div class="order-deny-section" style="margin-top: 4pt;">

    <!-- Order denying request to reschedule hearing -->
    <div class="order-deny-section">
        <div class="order-deny-list-item">
            <span class="order-deny-number">5.</span>
            <span class="order-deny-checkbox"></span>
            <span class="order-deny-label">Order denying request to reschedule hearing</span>
        </div>
        <div class="order-deny-details">
            The request to reschedule the hearing is DENIED for the reasons specified
            <span class="order-deny-checkbox"></span>
            below:
            <span class="order-deny-checkbox"></span>
            <a href="#">on Attachment 5.</a>
        </div>
    </div>

    <!-- Order granting request to reschedule hearing and notice of new hearing -->
    <div class="order-grant-section">
        <div class="order-grant-list-item">
            <span class="order-grant-number">6.</span>
            <span class="order-grant-checkbox"></span>
            <span class="order-grant-label">Order granting request to reschedule hearing and notice of new hearing</span>
        </div>
        <div class="order-grant-details">
            <span class="order-grant-subletter">a.</span>
            The court hearing is rescheduled to the date, time, and location shown below:
        </div>
        <div class="order-grant-box">
            <div class="order-grant-row">
                <span>New Hearing Date:</span>
                <span style="margin-left: 110pt;">Time:</span>
                <span style="margin-left: 73pt;">Dept.:</span>
                <span style="margin-left: 80pt;">Room:</span>
            </div>
            <div class="order-grant-row">
                Address of court:
                <span class="order-grant-checkbox" style="margin-left: 6pt;"></span>
                <span style="margin-left: 2pt;">Same as noted above</span>
                <span class="order-grant-checkbox" style="margin-left: 12pt;"></span>
                <span style="margin-left: 2pt;">Other (specify):</span>
                <span class="field-line-medium"></span>
            </div>
            <div class="order-grant-row">
                <span class="order-grant-checkbox"></span>
                <span>
                    The parties must attend an appointment for child custody mediation or recommending counseling as follows </br>
                    <span style="font-style: italic; margin-left: 30pt;">(specify date, time, and location):</span>
                </span>
            </div>
        </div>
        <div class="order-grant-details">
            <span class="order-grant-subletter">b.</span>
            <span class="order-grant-checkbox"></span>
            By granting the request, any temporary emergency (ex parte) orders previously issued remain in effect until
        </div>
        <div class="order-grant-details" style="margin-left: 30pt;">
            (1) <span style="margin-left: 4pt;"class="order-grant-checkbox"></span> the end of the new hearing in item 6a.
            <br>
            (2) <span style="margin-left: 4pt;"class="order-grant-checkbox"></span> (date):
        </div>
    </div>

    <!-- Reason for rescheduling -->
    <div class="reason-reschedule-section">
        <div class="reason-reschedule-list-item">
            <span class="reason-reschedule-number">7.</span>
            <span class="reason-reschedule-label">Reason for rescheduling</span>
        </div>
        <div class="reason-reschedule-details" style="margin-left: 0;">
            <span class="reason-reschedule-subletter" style="margin-left: 16pt;">a.</span>
            <span style="margin-left: 4pt;">The hearing needs to be rescheduled because</span>
        </div>
        <div class="reason-reschedule-list">
            <div class="reason-reschedule-item">
                <span class="reason-reschedule-item-number">(1)</span>
                <span class="reason-reschedule-checkbox"></span>
                <span>the papers were not served before the current hearing date.</span>
            </div>
            <div class="reason-reschedule-item">
                <span class="reason-reschedule-item-number">(2)</span>
                <span class="reason-reschedule-checkbox"></span>
                <span>the parties were referred to child custody recommending counseling before the hearing.</span>
            </div>
            <div class="reason-reschedule-item">
                <span class="reason-reschedule-item-number">(3)</span>
                <span class="reason-reschedule-checkbox"></span>
                <span>this is the responding party's first request to reschedule in a case involving property restraint emergency orders.</span>
            </div>
            <div class="reason-reschedule-item">
                <span class="reason-reschedule-item-number">(4)</span>
                <span class="reason-reschedule-checkbox"></span>
                <span style="margin-right: 15pt;">other good cause as stated</span>
                <span class="reason-reschedule-checkbox"></span>
                <span style="margin-right: 10pt;">below:</span>
                <span style="margin-right: -3pt;"class="reason-reschedule-checkbox"></span>
                <a href="#" class="reason-reschedule-link">on Attachment 7a(4).</a>
            </div>
        </div>
        <div class="reason-reschedule-details-2">
            <span class="reason-reschedule-subletter">b.</span>
            <span class="reason-reschedule-checkbox"></span>
            <span>The court in its discretion finds good cause and reschedu<b>l</b>es the hearing.</span>
        </div>
    </div>

    <!-- Footer -->
    <span class="footer-page-info"> <b>Page 1 of 2</b></span>
    <table class="footer-table" aria-hidden="true">
    <tr>
        <td class="footer-left">
        Form Adopted for Mandatory Use<br>
        Judicial Council of California<br>
        FL-309 [New July 1, 2020]
        </td>
        <td class="footer-center">
        <div class="footer-title">ORDER ON REQUEST TO RESCHEDULE HEARING</div>
        <div class="footer-subtitle">(Family Law—Governmental—Uniform Parentage—Custody and Support)</div>
        </td>
        <td class="footer-right">
        Family Code, § 245<br>
        Cal. Rules of Court, rule 5.95<br>
        <span class="footer-link">www.courts.ca.gov</span>
        </td>
    </tr>
    </table>
</body>
</html>