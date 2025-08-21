<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FL-309</title>
    <style>
        {!! file_get_contents(resource_path('css/fl309.css')) !!}

        .form-box-table {
            width: 100%;
            border-collapse: collapse;
            border: 1.2px solid black;
            margin-top: 30pt;
        }

        .form-box-table td {
            border: 1px solid black;
            vertical-align: top;
            font-size: 6pt;
            line-height: 1.2;
        }

        .checkbox {
            border: 1px solid black;
            width: 17pt;
            height: 8pt;
            display: inline-block;
            vertical-align: middle;
            margin-top: 5pt;
            margin-right: 4pt;
            margin-left: 4pt;
        }

        .section-eight{
            font-size: 9pt;
        }

        .section-nine-content{
            margin-left: 12pt;
            font-size: 9pt;
        }

        .section-nine-list{
            margin-left: 15pt;
        }

        .section-ten-content {
            margin-left: 15pt;
            font-size: 9pt;
            line-height: 1.5 !important;
        }

        .p2-signature-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 9pt;
            margin-top: 50px;
            table-layout: fixed;
        }

        .p2-signature-date {
            width: 55%;
            vertical-align: bottom;
            position: relative;
            top: -70px; 
        }

        .p2-signature-line {
            display: inline-block;
            width: 150px;
            border-bottom: 1px solid black;
            margin-left: 4px;
        }

        .p2-signature-officer-cell {
        width: 45%;
        vertical-align: bottom;
        }

        .p2-signature-officer-block {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        }

        .p2-signature-officer-row {
        display: flex;
        align-items: center;
        width: 100%;
        }

        /* Triangle */
        .p2-signature-officer-triangle {
        width: 0;
        height: 0;
        border-left: 10px solid black;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        margin-right: 7px;
        }

        /* Line */
        .p2-signature-officer-line {
        flex: 1;
        border-bottom: 2px solid black;
        }

        /* Label */
        .p2-signature-officer-label {
        font-size: 6pt;
        text-align: center;
        }

        .p2-footer-table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            margin-top:-9pt;
            
        }

        .p2-footer-table {
            margin-top: -5pt;
        }

        .p2-footer-left {
            text-align: left;
            white-space: nowrap;
            width: 33%;
            font-size: 6pt;
        }

        .p2-footer-center {
            text-align: center;
            white-space: nowrap;
            width: 34%;
            font-weight: bold;
            line-height: 1;
        }

        .p2-footer-right {
            text-align: right;
            white-space: nowrap;
            width: 33%;
            font-size: 6pt;
            font-weight:bold;
        }

        .p2-footer-subtitle {
            text-align: center;
            white-space: nowrap;
            font-weight: bold;
            line-height: 1;
        }


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

    <!-- PAGE BREAK -->
    <div style="page-break-before: always;"></div>

    <!-- Page 2 Header -->
    <table class="form-box-table">
        <tr>
            <td style="width: 60%;">
                <div class="form-box" style="text-align: right; font-size: 8pt; margin-right: 230pt; line-height: 1.5;">
                    <div>PETITIONER/PLAINTIFF:</div>
                    <div>RESPONDENT/DEFENDANT:</div>
                    <div>OTHER PARENT/PARTY:</div>
                </div>
            </td>
            <td style="width: 30%; text-align: left; vertical-align: top;">
                <div style="top: 18pt;" class="form-header">FL-309</div>
                <div style="margin-top: 3pt; margin-left: 2pt;">CASE NUMBER:</div>
            </td>
        </tr>
    </table>

    <!-- Section 8 -->
    <div class="section-eight">
        <div style="margin-top: 4pt; font-size: 10pt;">8.&nbsp;&nbsp;<b>Temporary emergency (ex parte) orders</b></div>
        <div style="margin-left: 15pt;">
            <div>
                <span>a.</span>
                <span class="checkbox"></span>
                <span>The temporary emergency (ex parte) orders are MODIFIED as of this date. The new orders are stated in the attached</span>
            </div>
            <div style="margin-left: 15pt; line-height: 0.2 !important;" >
                <div class>
                    <span>(1)</span>
                    <span class="checkbox"></span>
                    <span style="font-style: italic;">Request for Order</span> (form FL-300).
                </div>
                <div>
                    <span>(2)</span>
                    <span class="checkbox"></span>
                    <span style="font-style: italic;">Temporary Emergency (Ex Parte) Orders</span> (form FL-305)
                </div>
                <div>
                    <span>(3)</span>
                    <span class="checkbox"></span>
                    <span style="font-style: italic;">Order to Show Cause for</span>
                    <span class="checkbox"></span> contempt.
                    <span class="checkbox"></span> seek work.
                    <span class="checkbox"></span> other <span style="font-style: italic;">(specify):</span>
                </div>
                <div>
                    <span>(4)</span>
                    <span class="checkbox"></span>
                    other <span style="font-style: italic;">(specify):</span>
                </div>
            </div>
            <div>
                <span>b.</span>
                <span class="checkbox"></span>
                The temporary emergency (ex parte) orders are TERMINATED for the reasons stated
                <span class="checkbox"></span>
                <a href="#" style="text-decoration: underline; color: #333333ff;">on Attachment 8b. </br></a>
                <span style="margin-left: 32pt; margin-top: -1pt;" class="checkbox"></span>
                <span>in this section: </span>
            </div>
        </div>
    </div>

    <!-- Section 9 -->
    <div class="section-nine" style="margin-top: 12pt;">
        <div>9. &nbsp;&nbsp;<b>Service of order</b></div>
        <div class="section-nine-content">
            <div>
                <span>a.</span>
                <span class="checkbox"></span>
                No further service is required. Both parties were present at the hearing when the court made this order.
            </div>
            <div>
                <span>b.</span>
                <span class="checkbox"></span>
                The documents listed in item 10 must be served
            </div>
            <div class="section-nine-list">
                <div>
                    <span>(1)</span>
                    <span class="checkbox"></span>
                    as required by rule 5.92
                </div>
                <div style="margin-bottom: 4pt;">
                    <span>(2)</span>
                    <span class="checkbox"></span>
                    by <span style="font-style: italic;">(date):</span>
                </div>
                <div>
                    on <span style="font-style: italic;">(select all that apply)</span>
                    <div style="margin-top: 4pt;">
                        <span>(1)</span>
                        <span class="checkbox"></span>
                        petitioner/plaintiff.
                    </div>
                    <div>
                        <span>(2)</span>
                        <span class="checkbox"></span>
                        respondent/defendant.
                    </div>
                    <div>
                        <span>(3)</span>
                        <span class="checkbox"></span>
                        other parent/party.
                    </div>
                    <div>
                        <span>(4)</span>
                        <span class="checkbox"></span>
                        other <span style="font-style: italic;">(specify):</span>
                    </div>
                </div>
            </div>
            <div>
                <span>c.</span>
                <span class="checkbox"></span>
                All documents must be served as follows:
            </div>
            <div style="margin-left: 16pt;">
                <div>
                    <span>(1)</span>
                    <span class="checkbox"></span>
                    Personally served
                </div>
                <div>
                    <span>(2)</span>
                    <span class="checkbox"></span>
                    Served by mail
                </div>
                <div>
                    <span>(3)</span>
                    <span class="checkbox"></span>
                    Other <span style="font-style: italic;">(specify):</span>
                </div>
            </div>
            <div>
                <span>d.</span>
                <span class="checkbox"></span>
                Other orders regarding service <span style="font-style: italic;">(specify):</span>
            </div>
        </div>
    </div>

    <!-- Section 10 -->
    <div class="section-ten" style="margin-top: 20pt;">
        <div>10.&nbsp;<b>Documents for service</b></div>
        <div class="section-ten-content">
            <div>
                A filed copy of this order (form FL-309) must be served along with the following papers:
            </div>
            <div>
                <span>a.</span>
                <span style="margin-left: 5pt;" class="checkbox"></span>
                A copy of the previously filed <span style="font-style: italic;">Request for Order</span> (form FL-300), order to show cause, or other moving paper.
            </div>
            <div>
                <span>b.</span>
                <span style="margin-left: 5pt;" class="checkbox"></span>
                A copy of the extended or modified <span style="font-style: italic;">Temporary Emergency (Ex Parte) Orders</span> (form FL-305).
            </div>
            <div style="margin-bottom: 20pt;">
                <span>c.</span>
                <span style="margin-left: 6pt;" class="checkbox"></span>
                Other <span style="font-style: italic;">(specify):</span>
            </div>
        </div>
    </div>

    <!-- Section 11 -->
    <div class="section-eleven" style="margin-top: 12pt; font-size: 9pt;">
        <div>
            <span style="margin-right: -5pt;">11.</span>
            <span class="checkbox"></span>
            <span>A <i>Responsive Declaration to Request for Order</i></span> (form FL-320) may be filed and served
        </div>
        <div style="margin-left: 15pt;">
            <div>
                <span>a.</span>
                <span class="checkbox"></span>
                as required by rule 5.92
            </div>
            <div>
                <span>b.</span>
                <span class="checkbox"></span>
                by <span style="font-style: italic;">(date):</span>
            </div>
        </div>
    </div>

    <!-- Section 12 -->
    <div class="section-twelve" style="margin-top: 5pt; font-size: 9pt;">
        <div>
            <span>12.</span>
            <span style="margin-left: -1pt;" class="checkbox"></span>
            Other orders:
        </div>
    </div>

    <!-- Page 2: Date and Judicial Officer -->
    <table class="p2-signature-table">
        <tr>
            <!-- Date -->
            <td class="p2-signature-date">
                Date: <span class="p2-signature-line"></span>
            </td>

            <!-- Judicial Officer -->
            <td class="p2-signature-officer-cell">
            <div class="p2-signature-officer-block">
                <div class="p2-signature-officer-row">
                <div class="p2-signature-officer-triangle"></div>
                <div class="p2-signature-officer-line"></div>
                </div>
                <div class="p2-signature-officer-label">JUDICIAL OFFICER</div>
            </div>
            </td>
        </tr>
    </table>

    <!-- Section Divider -->
    <hr class="p2-section-divider">

    <!-- Page 2 Footer -->
    <table class="p2-footer-table">
        <tr>
            <td class="p2-footer-left">FL-309 [New July 1, 2020]</td>
            <td class="p2-footer-center">ORDER ON REQUEST TO RESCHEDULE HEARING</td>
            <td class="p2-footer-right">Page 2 of 2</td>
        </tr>
        <tr>
            <td colspan="3" class="p2-footer-subtitle">
                (Family Law—Governmental—Uniform Parentage—Custody and Support)
            </td>
        </tr>
    </table>
</body>
</html>