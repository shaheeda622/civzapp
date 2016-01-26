<div class="col-xs-12 ng-scope">
    <div class="page-header clrbrd3" style="height: 64px;">
        <h2 style="line-height: 64px;">User Log</h2>
    </div>
    <button onclick="clearFiter()" class="btn btn-primary btn-cons btn-cons-clear pull-right">Clear All Filters</button>
    <div style="clear: both;"></div>
    <div id="clientsDb">
        <div class="k-widget k-grid" id="grdUserLog" data-role="grid"><div class="k-grid-header" style="padding-right: 17px;">
                <div class="k-grid-header-wrap">
                    <table role="grid">
                        <colgroup>
                            <col style="width:100px">
                            <col style="width:120px">
                            <col style="width:100px">
                            <col style="width:200px">
                            <col style="width:100px">
                        </colgroup>
                        <thead role="rowgroup">
                            <tr role="row">
                                <th class="k-header k-filterable k-with-icon" data-field="User_Name" data-title="User" scope="col" data-role="columnsorter">
                                    <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                    <a class="k-link" href="/Admin/BindUserLog?grdUserLog-sort=User_Name-asc">User</a>
                                </th>
                                <th class="k-header k-filterable k-with-icon" data-field="Attempt_At" data-title="Attempted At" scope="col" data-role="columnsorter">
                                    <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                    <a class="k-link" href="/Admin/BindUserLog?grdUserLog-sort=Attempt_At-asc">Attempted At</a>
                                </th>
                                <th class="k-header k-filterable k-with-icon" data-field="Status" data-title="Status" scope="col" data-role="columnsorter">
                                    <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                    <a class="k-link" href="/Admin/BindUserLog?grdUserLog-sort=Status-asc">Status</a>
                                </th>
                                <th class="k-header k-filterable k-with-icon" data-field="Failure_Reason" data-title="Failure Reason" scope="col" data-role="columnsorter">
                                    <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                    <a class="k-link" href="/Admin/BindUserLog?grdUserLog-sort=Failure_Reason-asc">Failure Reason</a>
                                </th>
                                <th class="k-header k-filterable k-with-icon" data-field="Logged_Out" data-title="Logged Out At" scope="col" data-role="columnsorter">
                                    <a class="k-grid-filter" href="javascript:void(0)" tabindex="-1"><span class="k-icon k-filter"></span></a>
                                    <a class="k-link" href="/Admin/BindUserLog?grdUserLog-sort=Logged_Out-asc">Logged Out At</a>
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
                        <col style="width:120px">
                        <col style="width:100px">
                        <col style="width:200px">
                        <col style="width:100px">
                    </colgroup>
                    <tbody role="rowgroup">
                        <tr data-uid="8b72fa03-2cab-4205-b3b6-ebbb65966ac6" role="row">
                            <td role="gridcell">admin@vz.ae</td>
                            <td role="gridcell">25-Jan-2016 05:26:00 PM</td>
                            <td role="gridcell">Success</td>
                            <td role="gridcell"></td>
                            <td role="gridcell"></td>
                        </tr>
                        <tr class="k-alt" data-uid="c2697493-384e-42cb-a332-9512f64bb612" role="row">
                            <td role="gridcell">salman.khoja@vz.ae</td>
                            <td role="gridcell">25-Jan-2016 04:58:00 PM</td>
                            <td role="gridcell">Success</td>
                            <td role="gridcell"></td>
                            <td role="gridcell">25-Jan-2016 05:00:34 PM</td>
                        </tr>
                        <tr data-uid="9f223dc8-1271-41a1-b3b1-3ba05fa559ba" role="row">
                            <td role="gridcell">admin@vz.ae</td>
                            <td role="gridcell">25-Jan-2016 04:56:00 PM</td>
                            <td role="gridcell">Success</td>
                            <td role="gridcell"></td>
                            <td role="gridcell">25-Jan-2016 04:56:56 PM</td>
                        </tr>
                        <tr class="k-alt" data-uid="cb6a2b50-f4d5-49c6-b750-bdbe612bb22c" role="row">
                            <td role="gridcell">admin@vz.ae</td>
                            <td role="gridcell">24-Jan-2016 04:55:00 PM</td>
                            <td role="gridcell">Success</td><td role="gridcell"></td>
                            <td role="gridcell"></td>
                        </tr>
                        <tr data-uid="ba6809b4-63f1-45a1-8e99-f48167af0cef" role="row">
                            <td role="gridcell">admin@vz.ae</td>
                            <td role="gridcell">24-Jan-2016 04:40:00 PM</td>
                            <td role="gridcell">Success</td><td role="gridcell"></td>
                            <td role="gridcell"></td>
                        </tr>
                        <tr class="k-alt" data-uid="43ebf761-6d10-410a-b07d-e2c54e84577f" role="row">
                            <td role="gridcell">admin@vz.ae</td>
                            <td role="gridcell">24-Jan-2016 04:17:00 PM</td>
                            <td role="gridcell">Success</td><td role="gridcell"></td>
                            <td role="gridcell"></td>
                        </tr>
                        <tr data-uid="ec2c2939-9717-4db5-bc8c-0d2ac27cee33" role="row">
                            <td role="gridcell">admin@vz.ae</td>
                            <td role="gridcell">24-Jan-2016 01:56:00 PM</td>
                            <td role="gridcell">Success</td><td role="gridcell"></td>
                            <td role="gridcell"></td>
                        </tr>
                        <tr class="k-alt" data-uid="13926cdb-24a1-4556-8c2c-5b1a7621fbd5" role="row">
                            <td role="gridcell">admin@vz.ae</td>
                            <td role="gridcell">21-Jan-2016 09:24:00 PM</td>
                            <td role="gridcell">Success</td><td role="gridcell"></td>
                            <td role="gridcell"></td>
                        </tr>
                        <tr data-uid="68b652ba-ba54-4836-8a4d-ffd7c629246c" role="row">
                            <td role="gridcell">admin@vz.ae</td>
                            <td role="gridcell">21-Jan-2016 08:58:00 PM</td>
                            <td role="gridcell">Success</td>
                            <td role="gridcell"></td>
                            <td role="gridcell"></td>
                        </tr><tr class="k-alt" data-uid="9828d6d9-4f02-48ee-b1b1-ac8918bd7174" role="row">
                            <td role="gridcell">francesca@matrixpartnership.biz</td>
                            <td role="gridcell">21-Jan-2016 12:48:00 PM</td>
                            <td role="gridcell">Success</td>
                            <td role="gridcell"></td><td role="gridcell"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="k-pager-wrap k-grid-pager k-widget" data-role="pager">
                <a class="k-link k-pager-nav k-state-disabled k-pager-first" data-page="1" href="#" title="Go to the first page" tabindex="-1">
                    <span class="k-icon k-i-seek-w">seek-w</span>
                </a>
                <a class="k-link k-pager-nav k-state-disabled" data-page="1" href="#" title="Go to the previous page" tabindex="-1">
                    <span class="k-icon k-i-arrow-w">arrow-w</span>
                </a>
                <ul class="k-pager-numbers k-reset">
                    <li><span class="k-state-selected">1</span></li>
                    <li><a tabindex="-1" href="#" class="k-link" data-page="2">2</a></li>
                    <li><a tabindex="-1" href="#" class="k-link" data-page="3">3</a></li>
                    <li><a tabindex="-1" href="#" class="k-link" data-page="4">4</a></li>
                    <li><a tabindex="-1" href="#" class="k-link" data-page="5">5</a></li>
                    <li><a tabindex="-1" href="#" class="k-link" data-page="6">6</a></li>
                    <li><a tabindex="-1" href="#" class="k-link" data-page="7">7</a></li>
                    <li><a tabindex="-1" href="#" class="k-link" data-page="8">8</a></li>
                    <li><a tabindex="-1" href="#" class="k-link" data-page="9">9</a></li>
                    <li><a tabindex="-1" href="#" class="k-link" data-page="10">10</a></li>
                    <li><a tabindex="-1" href="#" class="k-link" data-page="11" title="More pages">...</a></li>
                </ul>
                <a class="k-link k-pager-nav" data-page="2" href="/Admin/BindUserLog?grdUserLog-page=2" title="Go to the next page" tabindex="-1">
                    <span class="k-icon k-i-arrow-e">arrow-e</span>
                </a>
                <a class="k-link k-pager-nav k-pager-last" data-page="27" href="/Admin/BindUserLog?grdUserLog-page=27" title="Go to the last page" tabindex="-1">
                    <span class="k-icon k-i-seek-e">seek-e</span>
                </a>
                <span class="k-pager-info k-label">1 - 10 of 266 items</span>
            </div>
        </div>
    </div>
</div>
<script>
    $('.toggle').hide();
</script>