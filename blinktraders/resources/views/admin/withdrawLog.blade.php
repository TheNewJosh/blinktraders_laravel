<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "withdraw-log.php"; 
            $page_title = "Withradaw System"; 
            $typStatus = ["Pending", "Approved", "Decline"];
        ?>
        @include('layouts.meta')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />
    </head>
    <body class="body-main-adm">
        <main class="main-dash row d-flex justify-content-between">
            <section class="col col-lg-1" id="toggle-bar-menu-area">
            @include('admin.layouts.sidebar')
            </section>
            <section class="col col-lg-11">
                <div class="fixed-top top-area-div">
                    <div class="head-border-bottom-ads"></div>
                    <div class="heading-adm-fixed" id="toggle-bar-menu-head">
                    @include('admin.layouts.header')
                    </div>
                </div>
                <div class="main-content-body force-bg-white px-1 py-3" id="mrda-margin-move">
                    <div class="row d-flex justify-content-between px-4 py-2">
                        <h4 class="big-font-size">Withdraw logs</h4>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Details</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($transactions->count())
                          {{ $i=1 }}
                          @foreach ($transactions as $trn)
                          <tr>
                                <td>{{$i}}</td>
                                <td>{{$trn->user->name}}</td>
                                <td>{{$trn->amount}}</td>
                                <td>{{$trn->wallet_address}}</td>
                                <td>{{$trn->reference_id}}</td>
                                <td>{{$typStatus[$trn->status]}}</td>
                                <td>{{$trn->created_at}}</td>
                                <td>
                                    <div class="dropdown-adm">
                                        <a href="#" class="link-adm dropdown-toggle text-center" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="icon-r-adm">
                                                <span class="force-color-black">
                                                    <i class="fa fa-chevron-right icon-rotates"></i>
                                                </span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu admin-drop-menu-tb" aria-labelledby="navbarDropdownMenuLink">
                                          <div class="force-color-black">
                                              <form action="{{ route('withdrawLog') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$trn->id}}">
                                                <input type="hidden" name="status" value="1">
                                                <button type="submit" class="button-deposit-log"><i class="fas fa-cog mr-2"></i> Approve request</button>
                                            </form>
                                            <div><br>
                                          <div class="force-color-black">
                                              <form action="{{ route('withdrawLog') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$trn->id}}">
                                                <input type="hidden" name="status" value="2">
                                                <button type="submit" class="button-deposit-log"><i class="far fa-envelope mr-2"></i> Decline Request</button>
                                            </form>
                                            </div><br>
                                            <?php if(1 != 1){ ?>
                                            <a class="force-color-black" href="components/actions-aaa-table.php?delete-deposit=yes&id=">
                                              <i class="far fa-envelope mr-2"></i>Delete
                                            </a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                          {{ $i++ }}
                          @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" type="application/javascript"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js" type="application/javascript"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );

            @if(session('statusUpdateSuccess'))
                window.onload = (event) => {
                   bs4pop.notice('Transaction Processed', {position: 'topright', type: 'success'})
                }
            @endif

            @if(session('statusdepositPaymentgate'))
                window.onload = (event) => {
                   bs4pop.notice('Transaction Deleted', {position: 'topright', type: 'success'})
                }
            @endif
        </script>
        
    </body>
</html>