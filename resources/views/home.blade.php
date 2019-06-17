  @extends('layouts.app')

  @section('content-title', 'Home')
  @section('content-subtitle', 'Dashboard')

  @section('content')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Dashboard</h3>
        </div>
        <div class="box-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          <!-- Apply any bg-* class to to the info-box to color it -->

            <div class="row">
              <div class="col-xs-6 col-md-3">
                <div class="info-box bg-yellow">
                  <span class="info-box-icon">
                    <i class="fa fa-comments-o"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                    <!-- The progress section is optional -->
                    <div class="progress">
                      <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                      70% Increase in 30 Days
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-md-3">
                <div class="info-box bg-red">
                  <span class="info-box-icon">
                    <i class="fa fa-comments-o"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                    <!-- The progress section is optional -->
                    <div class="progress">
                      <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                      70% Increase in 30 Days
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-md-3">
                <div class="info-box bg-blue">
                  <span class="info-box-icon">
                    <i class="fa fa-comments-o"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                    <!-- The progress section is optional -->
                    <div class="progress">
                      <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                      70% Increase in 30 Days
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-md-3">
                <div class="info-box bg-green">
                  <span class="info-box-icon">
                    <i class="fa fa-comments-o"></i>
                  </span>
                  <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                    <!-- The progress section is optional -->
                    <div class="progress">
                      <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                      70% Increase in 30 Days
                    </span>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
