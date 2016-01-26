<div class="col-xs-12 ng-scope">
<div class="page-header clrbrd2" style="height: 64px;">
    <h2 style="line-height: 64px;">Payment Log</h2>
</div>
      <button onclick="clearFiter()" class="btn btn-primary btn-cons btn-cons-clear pull-right">Clear All Filters</button>
    <div style="clear:both;"></div>
<div id="clientsDb">
    <div class="k-widget k-grid" id="grdPaymentLog" data-role="grid">
        <div class="k-grid-header" style="padding-right: 17px;">
            <div class="k-grid-header-wrap">
                <table role="grid">
                    <colgroup>
                        <col style="width:130px">
                        <col style="width:100px">
                        <col style="width:100px">
                        <col style="width:115px">
                        <col style="width:130px">
                        <col style="width:100px">
                        <col style="width:145px">
                    </colgroup>
                    <thead role="rowgroup">
                        <tr role="row">
                            <th class="k-header k-filterable k-with-icon" data-field="CustomerName" data-title="Account Name" scope="col" data-role="columnsorter">
                                <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                <a class="k-link" href="/Admin/BindPaymentLog?grdPaymentLog-sort=CustomerName-asc">Account Name</a>
                            </th>
                            <th class="k-header k-filterable k-with-icon" data-field="Name" data-title="Invoice No." scope="col" data-role="columnsorter">
                                <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                <a class="k-link" href="/Admin/BindPaymentLog?grdPaymentLog-sort=Name-asc">Invoice No.</a>
                            </th>
                            <th class="k-header k-filterable k-with-icon" data-field="DueDate" data-title="Due Date" scope="col" data-role="columnsorter">
                                <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                <a class="k-link" href="/Admin/BindPaymentLog?grdPaymentLog-sort=DueDate-asc">Due Date</a>
                            </th>
                            <th class="k-header k-filterable k-with-icon" data-field="OutStanding_Amt" data-title="Paid Amount (AED)" scope="col" data-role="columnsorter">
                                <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                <a class="k-link" href="/Admin/BindPaymentLog?grdPaymentLog-sort=OutStanding_Amt-asc">Paid Amount (AED)</a>
                            </th>
                            <th class="k-header k-filterable k-with-icon" data-field="LoggedAt" data-title="Time stamp" scope="col" data-role="columnsorter">
                                <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                <a class="k-link" href="/Admin/BindPaymentLog?grdPaymentLog-sort=LoggedAt-asc">Time stamp</a>
                            </th>
                            <th class="k-header k-filterable k-with-icon" data-field="Tran_Status" data-title="Status" scope="col" data-role="columnsorter">
                                <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                <a class="k-link" href="/Admin/BindPaymentLog?grdPaymentLog-sort=Tran_Status-asc">Status</a>
                            </th>
                            <th class="k-header k-filterable k-with-icon" data-field="Done_by" data-title="Done By" scope="col" data-role="columnsorter">
                                <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                <a class="k-link" href="/Admin/BindPaymentLog?grdPaymentLog-sort=Done_by-asc">Done By</a>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="k-grid-content" style="height:405px">
            <table role="grid">
                <colgroup>
                    <col style="width:130px">
                    <col style="width:100px">
                    <col style="width:100px">
                    <col style="width:115px">
                    <col style="width:130px">
                    <col style="width:100px">
                    <col style="width:145px">
                </colgroup>
                <tbody role="rowgroup">
                    <tr data-uid="091b14c9-64e1-4e38-ad8a-7c8401e42ee9" role="row">
                        <td role="gridcell">The Matrix Partnership FZ LLC</td>
                        <td role="gridcell">SIN024013</td>
                        <td role="gridcell">21-Jan-2016</td>
                        <td class="someclass" role="gridcell">27,000.00</td>
                        <td role="gridcell">21-Jan-2016 12:51:38 PM</td>
                        <td role="gridcell">Succeed</td><td role="gridcell">francesca@matrixpartnership.biz</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="k-pager-wrap k-grid-pager k-widget" data-role="pager"><a class="k-link k-pager-nav k-state-disabled k-pager-first" data-page="1" href="#" title="Go to the first page" tabindex="-1"><span class="k-icon k-i-seek-w">seek-w</span></a><a class="k-link k-pager-nav k-state-disabled" data-page="1" href="#" title="Go to the previous page" tabindex="-1"><span class="k-icon k-i-arrow-w">arrow-w</span></a><ul class="k-pager-numbers k-reset"><li><span class="k-state-selected">1</span></li><li><a tabindex="-1" href="#" class="k-link" data-page="2">2</a></li><li><a tabindex="-1" href="#" class="k-link" data-page="3">3</a></li><li><a tabindex="-1" href="#" class="k-link" data-page="4">4</a></li><li><a tabindex="-1" href="#" class="k-link" data-page="5">5</a></li><li><a tabindex="-1" href="#" class="k-link" data-page="6">6</a></li><li><a tabindex="-1" href="#" class="k-link" data-page="7">7</a></li></ul><a class="k-link k-pager-nav" data-page="2" href="/Admin/BindPaymentLog?grdPaymentLog-page=2" title="Go to the next page" tabindex="-1"><span class="k-icon k-i-arrow-e">arrow-e</span></a><a class="k-link k-pager-nav k-pager-last" data-page="7" href="/Admin/BindPaymentLog?grdPaymentLog-page=7" title="Go to the last page" tabindex="-1"><span class="k-icon k-i-seek-e">seek-e</span></a><span class="k-pager-info k-label">1 - 10 of 65 items</span></div></div>
</div>
</div>
 <script class="ng-scope">
     $('.toggle').hide();
</script>