<div class="container-fluid featurs py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-6">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <h4>Saldo</h4>
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-dollar-sign fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center pb-1">
                        <p>{{ rupiah($saldo) }}</p>
                        <!-- End Modal Top Up -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <h4>TopUp</h4>
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-wallet fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center pb-1">
                        <button type="button" class="btn btn-success px-5" data-bs-target="#formTopUp" data-bs-toggle="modal">Top Up</button>
                        <!-- Modal Top Up -->
                        <form action="{{ route('topupNow') }}" method="post">
                            @csrf
                            <div class="modal fade" id="formTopUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Top Up</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <input type="number" name="credit" id="" class="form-control" min="10000" value="10000">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Top Up Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End Modal Top Up -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>