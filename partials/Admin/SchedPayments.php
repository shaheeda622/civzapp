<div class="col-md-12 ng-scope">
    <div class="page-header clrbrd4" style="height: 64px;">
        <h2 style="line-height: 64px;">Scheduled Payments</h2>
    </div>
    <button onclick="clearFiter()" class="btn btn-primary btn-cons btn-cons-clear pull-right">Clear All Filters</button>
    <div style="clear:both;"></div>
    <div id="clientsDb1">
        <div id="clientsDb">
            <div class="k-widget k-grid" id="grdUpcomingDues" data-role="grid">
                <div class="k-grid-header" style="padding-right: 17px;">
                    <div class="k-grid-header-wrap">
                        <table role="grid">
                            <colgroup><col class="k-hierarchy-col">
                                <col style="width:120px">
                                <col style="width:100px">
                                <col style="width:100px">
                                <col style="width:25px">
                            </colgroup>
                            <thead role="rowgroup">
                                <tr role="row">
                                    <th class="k-hierarchy-cell k-header">&nbsp;</th>
                                    <th class="k-header k-filterable k-with-icon" data-field="AccountName" data-title="Account Name" scope="col" data-role="columnsorter">
                                        <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                        <a class="k-link" href="/Admin/HierarchyBindingInv?grdUpcomingDues-sort=AccountName-asc">Account Name</a>
                                    </th>
                                    <th class="k-header k-filterable k-with-icon" data-field="Name" data-title="Invoice No" scope="col" data-role="columnsorter">
                                        <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                        <a class="k-link" href="/Admin/HierarchyBindingInv?grdUpcomingDues-sort=Name-asc">Invoice No</a>
                                    </th>
                                    <th class="k-header k-filterable k-with-icon" data-field="Date" data-title="Date" scope="col" data-role="columnsorter">
                                        <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                        <a class="k-link" href="/Admin/HierarchyBindingInv?grdUpcomingDues-sort=Date-asc">Date</a>
                                    </th>
                                    <th class="k-header" data-field="IsSelected" data-groupable="false" data-title="" scope="col"><span class="k-link">&nbsp;</span>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="k-grid-content" style="height:400px">
                    <table role="treegrid">
                        <colgroup>
                            <col class="k-hierarchy-col">
                            <col style="width:120px">
                            <col style="width:100px">
                            <col style="width:100px">
                            <col style="width:25px">
                        </colgroup>
                        <tbody role="rowgroup">
                            <tr class="k-master-row" data-uid="706758bb-b2e8-4b4e-9e3c-f747a7559bf0" role="row">
                                <td class="k-hierarchy-cell"><a class="k-icon k-minus" href="#" tabindex="-1"></a></td>
                                <td role="gridcell">Visamed Healthcare Solutions MENA FZ LLC</td>
                                <td role="gridcell">SIN021701</td><td role="gridcell">22-Sep-15</td>
                                <td class="cellbtncol" role="gridcell"><div><input class="checkbox" type="checkbox"><label for="cellbtncol"></label></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="k-grid-footer" tabindex="-1" style="padding-right: 17px;">
                    <div class="k-grid-footer-wrap">
                        <table>
                            <colgroup>
                                <col class="k-hierarchy-col">
                                <col style="width:120px">
                                <col style="width:100px">
                                <col style="width:100px">
                                <col style="width:25px">
                            </colgroup>
                            <tbody>
                                <tr class="k-footer-template">
                                    <td class="k-hierarchy-cell">&nbsp;</td>
                                    <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                    <td><input onclick="CancelSchedule()" type="Button" value="Cancel"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="k-pager-wrap k-grid-pager k-widget" data-role="pager"><a class="k-link k-pager-nav k-state-disabled k-pager-first" data-page="1" href="#" title="Go to the first page" tabindex="-1"><span class="k-icon k-i-seek-w">seek-w</span></a><a class="k-link k-pager-nav k-state-disabled" data-page="1" href="#" title="Go to the previous page" tabindex="-1"><span class="k-icon k-i-arrow-w">arrow-w</span></a><ul class="k-pager-numbers k-reset"><li><span class="k-state-selected">1</span></li></ul><a class="k-link k-pager-nav k-state-disabled" data-page="1" href="#" title="Go to the next page" tabindex="-1"><span class="k-icon k-i-arrow-e">arrow-e</span></a><a class="k-link k-pager-nav k-state-disabled k-pager-last" data-page="1" href="#" title="Go to the last page" tabindex="-1"><span class="k-icon k-i-seek-e">seek-e</span></a><span class="k-pager-info k-label">1 - 1 of 1 items</span></div></div>
        </div>
    </div>
</div>
<script>
    $('.toggle').hide();
</script>