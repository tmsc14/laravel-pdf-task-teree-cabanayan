<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>FL-309 Header Section</title>
    <style>
        @page {
            size: 8.5in 11in;
            margin: 0.5in;
            margin-top: 31pt;
        }
        
        body {
            font-family: "Arial", sans-serif;
            font-size: 10pt;
            line-height: 1.5;
            color: black;
            margin: 0;
            padding: 0;
        }
        
        .form-header {
            position: absolute;
            top: 0;
            right: 0;
            font-weight: bold;
            font-size: 10pt;
        }
        
        .main-table {
            width: 100%;
            border-collapse: collapse;
            border: 1.2px solid black;
            margin-top: 14pt;
        }
        
        .main-table td {
            border: 1px solid black;
            padding: 2pt;
            vertical-align: top;
            font-size: 6pt;
            line-height: 1.2;
        }
        
        .attorney-section {
            width: 50%;
        }
        
        .court-section {
            width: 50%;
        }
        
        .field-line {
            border-bottom: 1px solid black;
            display: inline-block;
            min-width: 120pt;
            height: 11pt;
            margin-left: 2pt;
        }
        
        .field-line-short {
            border-bottom: 1px solid black;
            display: inline-block;
            min-width: 40pt;
            height: 11pt;
            margin-left: 2pt;
        }
        
        .field-line-medium {
            border-bottom: 1px solid black;
            display: inline-block;
            min-width: 80pt;
            height: 11pt;
            margin-left: 2pt;
        }
        
        .label {
            font-weight: normal;
        }
        
        .for-court-use {
            text-align: center;
            margin-right: 13pt;
            font-weight: bold;
            font-size: 6pt;
        }

        .superior-court-info {
            text-align: right;
            margin-right: 293pt;
            margin-bottom: 4pt;
        }

        .superior-court-info:last-child {
            margin-bottom: 1pt;
        }
        
        .case-parties {
            padding: 1pt;
        }
        
        .party-line {
            margin-bottom: 4pt;
            font-size: 8pt;
            text-align: right;
            margin-right: 230pt;

        }
        
        .party-line:last-child {
            margin-bottom: 0;
        }
        
        .field-spacing {
            margin-left: 75pt; /* Adjust this value to increase/decrease spacing */
        }
        
        .field-spacing-small {
            margin-left: 4pt; /* For tighter spacing if needed */
        }

        .field-spacing-fax {
            margin-left: 150pt;
        }

        .field-spacing-state {
            margin-left: 189pt;
            margin-right: 30pt;
        }

        .resched-hearing {
            text-align: center;
           font-weight: bold;
           font-size: 10pt;
           padding: 6pt;
        }

        .case-number-label {
            font-size: 6pt;
            margin-bottom: 4pt;
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
            <td>
                <div style="font-weight: bold; margin-bottom: 4pt; font-size: 8pt;">SUPERIOR COURT OF CALIFORNIA, COUNTY OF</div>
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
</body>
</html>