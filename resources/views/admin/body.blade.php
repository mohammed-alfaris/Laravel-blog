<div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Dashboard</h2>
      </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-user-1"></i></div><strong>Number of users</strong>
                </div>
                <div class="number dashtext-1">{{$n_users}}</div>
              </div>
              <div class="progress progress-template">
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-contract"></i></div><strong>Number of posts</strong>
                </div>
                <div class="number dashtext-2">{{$n_posts}}</div>
              </div>
              <div class="progress progress-template">
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-contract"></i></div><strong>Number of comments</strong>
                </div>
                <div class="number dashtext-2">{{$n_comments}}</div>
              </div>
              <div class="progress progress-template">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 