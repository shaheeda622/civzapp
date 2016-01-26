<div class="col-xs-12 ng-scope">
    <div class="page-header clrbrd5" style="height: 64px;">
        <h2 style="line-height: 64px;">Profile Changes</h2>
    </div>
    <button onclick="clearFiter()" class="btn btn-primary btn-cons btn-cons-clear pull-right">Clear All Filters</button>
    <div style="clear:both;"></div>
    <div id="clientsDb">
        <div class="k-widget k-grid" id="grdApproveLog" data-role="grid">
            <div class="k-grid-header" style="padding-right: 17px;">
                <div class="k-grid-header-wrap">
                    <table role="grid">
                        <colgroup>
                            <col style="width:100px">
                            <col style="width:100px">
                            <col style="width:100px">
                            <col style="width:120px">
                            <col style="width:100px">
                        </colgroup>
                        <thead role="rowgroup">
                            <tr role="row">
                                <th class="k-header k-filterable k-with-icon" data-field="Name" data-title="Account" scope="col" data-role="columnsorter">
                                    <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                    <a class="k-link" href="/admin/ApproveProfile?grdApproveLog-sort=Name-asc">Account</a>
                                </th>
                                <th class="k-header k-filterable k-with-icon" data-field="Industry" data-title="Industry" scope="col" data-role="columnsorter">
                                    <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                    <a class="k-link" href="/admin/ApproveProfile?grdApproveLog-sort=Industry-asc">Industry</a>
                                </th>
                                <th class="k-header k-filterable k-with-icon" data-field="Customer_No" data-title="Customer_ No" scope="col" data-role="columnsorter">
                                    <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                    <a class="k-link" href="/admin/ApproveProfile?grdApproveLog-sort=Customer_No-asc">Customer_ No</a>
                                </th>
                                <th class="k-header k-filterable k-with-icon" data-field="Logged_At" data-title="Submitted At" scope="col" data-role="columnsorter">
                                    <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                    <a class="k-link" href="/admin/ApproveProfile?grdApproveLog-sort=Logged_At-asc">Submitted At</a>
                                </th>
                                <th class="k-header k-filterable k-with-icon" data-field="Logged_By" data-title="Submitted By" scope="col" data-role="columnsorter">
                                    <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                    <a class="k-link" href="/admin/ApproveProfile?grdApproveLog-sort=Logged_By-asc">Submitted By</a>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="k-grid-content" style="height:405px">
                <table role="grid">
                    <colgroup>
                        <col style="width:100px">
                        <col style="width:100px">
                        <col style="width:100px">
                        <col style="width:120px">
                        <col style="width:100px">
                    </colgroup>
                    <tbody role="rowgroup">
                        <tr data-uid="4494a57d-70c1-4a96-b1f1-10d74b1cf85b" role="row">
                            <td role="gridcell">
                                <a style="cursor:pointer;" onclick="ShowDetails('2')"> Vendor Resource Consulting Services FZ LLC </a>
                            </td>
                            <td role="gridcell">Telecommunications</td>
                            <td role="gridcell">001D00000156cYzIAI</td>
                            <td role="gridcell">21-Sep-2015 04:44:59 AM</td>
                            <td role="gridcell">Scott@vendorresource.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="k-pager-wrap k-grid-pager k-widget" data-role="pager">
                <a class="k-link k-pager-nav k-state-disabled k-pager-first" data-page="1" href="#" title="Go to the first page" tabindex="-1"><span class="k-icon k-i-seek-w">seek-w</span></a>
                <a class="k-link k-pager-nav k-state-disabled" data-page="1" href="#" title="Go to the previous page" tabindex="-1"><span class="k-icon k-i-arrow-w">arrow-w</span></a>
                <ul class="k-pager-numbers k-reset"><li><span class="k-state-selected">1</span></li></ul>
                <a class="k-link k-pager-nav k-state-disabled" data-page="1" href="#" title="Go to the next page" tabindex="-1"><span class="k-icon k-i-arrow-e">arrow-e</span></a>
                <a class="k-link k-pager-nav k-state-disabled k-pager-last" data-page="1" href="#" title="Go to the last page" tabindex="-1"><span class="k-icon k-i-seek-e">seek-e</span></a>
                <span class="k-pager-info k-label">1 - 4 of 4 items</span>
            </div>
        </div>
    </div>
</div>
<script>
    $('.toggle').hide();
</script>