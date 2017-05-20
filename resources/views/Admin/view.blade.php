@extends('layouts.dashboard')

@section('content')

<div class="right_col" role="main">    
    <div class="row tile_count">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
               <div class="icon"><i class="fa fa-user"></i></div>
               <div class="count">1</div>
               <h3>User Count</h3>
            </div>
        </div>
    </div>
    <div class="">
        <div class="row">
                      
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons1" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Contact</th>    
                          <th>Action</th>   
                        </tr>
                      </thead>
                      <tbody>                          
                           @foreach($users as $user)
                             <tr>
                                <td>{{ $user->user_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->mobile }}</td>
                                 <td class="actions">
                                   
                               
                                    <i data="edit_{{$user['id']}}" class="icon md-edit edit-row" aria-hidden="true"></i>                                    
                                     <i data="delete_{{$user['id']}}" class="icon md-delete remove-row" aria-hidden="true"></i>
                                     
                                     
                                  
                                  </td>
                              </tr>                              
                            @endforeach                        
                      </tbody>
                    </table>
                      
                  </div>
                </div>
              </div>
      </div>
    </div>
</div>

@endsection