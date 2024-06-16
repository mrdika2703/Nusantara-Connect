<x-admin.layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:authhName>{{ $authh->name }}</x-slot:authhName>
    <x-slot:authhNim>{{ $authh->nim }}</x-slot:authhNim>
    
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ \App\Models\Pustaka::count() }}</h3>

                            <p>Pustaka Budaya</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-bookmarks"></i>
                        </div>
                        <a class="small-box-footer">Data Count</a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ \App\Models\Tokoh::count() }}</h3>

                            <p>Tokoh</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-person"></i>
                        </div>
                        <a class="small-box-footer">Data Count</a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ \App\Models\Liputan::count() }}</h3>

                            <p>Liputan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a class="small-box-footer">Data Count</a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ \App\Models\TeksHome::count() }}</h3>

                            <p>TeksHome</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-bookmark"></i>
                        </div>
                        <a class="small-box-footer">Data Count</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Pustaka Budaya</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="pieChart"
                            style="width:100%;max-width:600px"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="card card-info">
                      <div class="card-header">
                          <h3 class="card-title">Liputan</h3>

                          <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                  <i class="fas fa-minus"></i>
                              </button>
                          </div>
                      </div>
                      <div class="card-body">
                          <canvas id="pieeChart"
                          style="width:100%;max-width:600px"></canvas>
                      </div>
                      <!-- /.card-body -->
                  </div>
              </div>

            </div>
            <!-- /.row -->
        </div>
    </div>

</x-admin.layouts>
