        <div class="col-md-12 ng-scope">
            <div class="page-header" style="height: 65px;">
                <h2 class="h2" style="line-height: 65px;">Dashboard </h2>
            </div>
            <div class="row" id="rowheight">
                <div class="col-md-12">
                    <div class="text-center dashboard-blk" id="divheight" style="height: 170px;">



                        <div class="dashboard-inner-blk" style="border:0;"><span class="row-two"></span></div>
                    </div>

                </div>
            </div>

            <script>

                        $('.toggle').hide();
                        $('#prog').hide();
                        //alert($(".k-grid .k-pager-refresh"))
                        $(document).ready(function () {
                            $('#divheight').css({'height': ($(window).height() - 120) + 'px'});
                            $('#imgheight').css({'height': ($(window).height() - 120) + 'px'});


                            $('.page-header').css({'height': ($('.navbar-brand').height() + 14) + 'px'});
                            $('.page-header h2').css({'line-height': ($('.navbar-brand').height() + 14) + 'px'});
                            $(window).resize(function () {
                                $('#divheight').css({'height': ($(window).height() - 120) + 'px'});
                                $('#imgheight').css({'height': ($(window).height() - 120) + 'px'});
                            });
                        });

            </script>
        </div>

    </div>