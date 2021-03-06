@extends('layouts.dashboard')

@section('content')
<?php

//echo "<pre>";
//
//print_r($users );
//echo "</pre>";
//
//exit;

?>
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
    
    <div class="error"></div>
    
    
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
                    <?php if(isset($products)){  ?>
                    <table id="datatable-buttons1" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Door Count</th>
                          <th>Row Count</th>
                          <th>Manufactured date</th>
                          <th>Status</th>  
                          <th>Action</th>   
                        </tr>
                      </thead>
                      <tbody>                          
                           @foreach($products as $value)
                             <tr>
                                <td id="dt_pid{{ $value->id }}">{{ $value->id }}</td>
                                <td id="dt_pname{{ $value->id }}">{{ $value->product_name }}</td>
                                <td id="dt_door_count{{ $value->id }}">{{ $value->door_count }}</td>
                                <td id="dt_row_count{{ $value->id }}">{{ $value->row_count }}</td>
                                <td id="dt_date{{ $value->id }}">{{ date('Y-m-d',strtotime($value->manufactured_date)) }}</td>
                                <td id="dt_status{{ $value->id }}">{{ $value->status == 1 ? 'Active' : 'Deactive' }}</td>                                 
                                <td class="actions">
                                    <i id="{{$value['id']}}" data-target="#product_model" data-toggle="modal" data="edit_{{$value['id']}}" class="fa fa-pencil-square-o pedit-row" aria-hidden="true"></i>                                    
                                    <i id="{{$value['id']}}" data-target="#product_model" data-toggle="modal" data="delete_{{$value['id']}}" class="fa fa-trash-o  pdel-row" aria-hidden="true"></i>                                                                       
                                </td>
                              </tr>                              
                            @endforeach                        
                      </tbody>
                    </table>
                     <?php } ?> 
                  </div>
                </div>
              </div>
      </div>
    </div>
</div>
<div class="modal fade example-modal-lg" id="product_model" aria-hidden="true" aria-labelledby="exampleOptionalLarge" role="dialog" tabindex="-1">
	<div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">*</span>
                    </button>
                    <h4 class="modal-title">
                        Edit Product Details
                        <span id="pop_invoice"></span>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="example table-responsive">
                        <div id="examplePopoverTable" >
                         
                        </div>
                    </div>
                </div>
            </div>
	</div>
</div>

@endsection