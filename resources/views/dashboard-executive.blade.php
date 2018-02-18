@extends('master')

@section('title', 'Executive Dashboard')

@section('sidebar')
@parent

<li class="user-details deep-orange darken-3">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="{{ URL::asset('images/puplogo.png') }}" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li>
                                        <a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                    </li>

                                    <li class="divider"></li>
                                    
                                    <li>
                                        <a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{ Request::is('modules/executive/vp/dashboard') ? 'Mr. Cruz' : 'Mr. Dela Vega' }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">{{ Request::is('modules/executive/vp/dashboard') ? 'Vice President' : 'Director' }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold {{ Request::is('modules/executive/vp/dashboard') ? 'active' : '' }}{{ Request::is('modules/executive/director/dashboard') ? 'active' : '' }}">
                        <a href="{{ Request::is('modules/executive/vp/dashboard') ? url('modules/executive/vp/dashboard') : url('modules/executive/director/dashboard') }}" class="waves-effect waves-deep-teal {{ Request::is('modules/executive/vp/dashboard') ? 'teal-text' : '' }} {{ Request::is('modules/executive/director/dashboard') ? 'teal-text' : '' }}">
                            <i class="mdi-action-dashboard"></i> Dashboard <span class="new badge yellow grey-text text-darken-4">4</span>
                        </a>
                    </li>
                    <li class="bold {{ Request::is('modules/executive/dashboard') ? 'active' : '' }}">
                        <a href="#" class="waves-effect waves-deep-teal {{ Request::is('modules/executive/dashboard') ? 'teal-text' : '' }}">
                            <i class="mdi-action-dashboard"></i> Evaluation Dashboard
                        </a>
                    </li>
                    
@endsection

@section('charts')
<div class="col l8 left">
	<h1>Enrollment in Branches and Campuses <small>{{ Request::is('executive-module/vp/dashboard') ? 'VP' : 'Director' }}</small></h1>


	<script src="{{ URL::asset('plugins/highcharts/highcharts.js') }}"></script>
	<script src="{{ URL::asset('plugins/highcharts/modules/data.js') }}"></script>
	<script src="{{ URL::asset('plugins/highcharts/modules/drilldown.js') }}"></script>

	<div id="container" style="min-width: 310px; height: 500px; margin: 0 auto; margin-right: 2%"></div>


	<script type="text/javascript">

              // Create the chart
              Highcharts.chart('container', {
              	chart: {
              		type: 'column'
              	},
              	title: {
              		text: 'Enrollment in Branches and Campuses by Program '
              	},
              	subtitle: {
              		text: 'Click the columns to view detailed data.'
              	},
              	xAxis: {
              		type: 'category'
              	},
              	yAxis: {
              		title: {
              			text: 'Total enrollees'
              		}

              	},
              	legend: {
              		enabled: true
              	},
              	plotOptions: {
              		series: {
              			borderWidth: 0,
              			dataLabels: {
              				enabled: true,
              				format: '{point.y}'
              			}
              		}
              	},

              	tooltip: {
              		headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
              		pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> total<br/>'
              	},

              	series: [{
              		name: 'Programs',
              		colorByPoint: true,
              		data: [{
              			name: 'Mariveles, Bataan',
              			y: 322,
              			drilldown: 'Mariveles, Bataan'
              		}, {
              			name: 'Lopez, Quezon',
              			y: 475,
              			drilldown: 'Lopez, Quezon'
              		}, {
              			name: 'Maragondon, Cavite',
              			y: 354,
              			drilldown: 'Maragondon, Cavite'
              		}, {
              			name: 'Mulanay, Quezon',
              			y: 137,
              			drilldown: 'Mulanay, Quezon'
              		}, {
              			name: 'Quezon City',
              			y: 492,
              			drilldown: 'Quezon City'
              		}, {
              			name: 'Sto. Tomas, Batangas',
              			y: 159,
              			drilldown: 'Sto. Tomas, Batangas'
              		}]
              	}],
              	drilldown: {
              		series: [{
              			name: 'Mariveles, Bataan',
              			id: 'Mariveles, Bataan',
              			data: [
              			[
              			'Diploma in Office Management Technology',
              			86
              			],
              			[
              			'Diploma in Information Communication Management Technology',
              			4
              			],
              			[
              			'Diploma in Information Communication Technology',
              			133
              			],
              			[
              			'Diploma in Electronics Engineering Technology',
              			99
              			]
              			]
              		}, {
              			name: 'Lopez, Quezon',
              			id: 'Lopez, Quezon',
              			data: [
              			[
              			'Diploma in Accounting Management Technology',
              			3
              			],
              			[
              			'Diploma in Electrical Engeneering Technology',
              			106
              			],
              			[
              			'Diploma in Information Communication Technology',
              			159
              			],
              			[
              			'Diploma in Office Management Technology',
              			207
              			]
              			]
              		}, {
              			name: 'Maragondon, Cavite',
              			id: 'Maragondon, Cavite',
              			data: [
              			[
              			'Diploma in Office Management Technology (Major in Legal Transcription)',
              			66
              			],
              			[
              			'Diploma in Office Management Technology (Major in Medical Transcription)',
              			110
              			],
              			[
              			'Diploma in Information Communication Management Technology',
              			113
              			],
              			[
              			'Diploma in Electrical Engineering Technology',
              			65
              			]
              			]
              		}, {
              			name: 'Mulanay, Quezon',
              			id: 'Mulanay, Quezon',
              			data: [
              			[
              			'Diploma in Office Management Technology (Major in Medical Office Management)',
              			53
              			],
              			[
              			'Diploma in Information Communication Technology',
              			84
              			]
              			]
              		}, {
              			name: 'Quezon City',
              			id: 'Quezon City',
              			data: [
              			[
              			'Diploma in Office Management Technology (Major in Medical Office Management)',
              			274
              			],
              			[
              			'Diploma in Information Communication Technology',
              			218
              			]
              			]
              		}, {
              			name: 'Sto. Tomas, Batangas',
              			id: 'Sto. Tomas, Batangas',
              			data: [
              			[
              			'Diploma in Office Management Technology (Major in Medical Office Management)',
              			114
              			],
              			[
              			'Diploma in Information Communication Technology',
              			45
              			]
              			] 
              		}]
              	}
              });
          </script>
      </div>

      @endsection

      @section('tables')
      <div class="col l4 right">
      	<h1>Data Analytics Source <small>ENROLLMENT</small></h1>
      	<ul id="issues-collection" class="collection">
      		<li class="collection-item avatar">
      			<i class="mdi-social-school red circle"></i>
      			<span class="collection-header"><strong>Technical Programs</strong></span>
      			<p>Branches and Campuses</p>
      		</li>
      		<li class="collection-item">
      			<a class="modal-trigger" href="#branch1">
      				<div class="row">
      					<div class="col s10">
      						<p class="collections-title"><strong>Mariveles, Bataan</strong></p>
      						<p class="collections-content">Bataan PUP Branch</p>
      					</div>
      					<div class="col s2">
      						<span class="task-cat yellow accent-1 grey-text text-darken-4">322</span>
      					</div>
      				</div>
      			</a>
      		</li>
      		<div id="branch1" class="modal modal-fixed-footer white">
      			<div class="modal-header">
      				<div class="container">
      					<h5>Mariveles, Bataan <small>Data Source</small></h5>
      				</div>
      			</div>
      			<div class="modal-content">
      				<table class="striped">
                    <thead>
                      <tr>
                        <th data-field="id">Course</th>
                        <th data-field="name">Enrollees</th>
                        <th data-field="price">Percent</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Diploma in Office Management Technology</td>
                        <td>55</td>
                        <td>0.07</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Major in Medical Office Management</td>
                        <td>31</td>
                        <td>0.04</td>
                      </tr>
                      <tr>
                        <td>Diploma in Information Communication Management Technology</td>
                        <td>4</td>
                        <td>0.01</td>
                      </tr>
                      <tr>
                        <td>Diploma in Information Communication Technology</td>
                        <td>133</td>
                        <td>0.17</td>
                      </tr>
                      <tr>
                        <td>Diploma in Electronics Engineering Technology</td>
                        <td>99</td>
                        <td>0.12</td>
                      </tr>
                    </tbody>
                  </table>
      			</div>
      			<div class="modal-footer">
      				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
      			</div>
      		</div>
      		<li class="collection-item">
      			<a class="modal-trigger" href="#branch2">
      				<div class="row">
      					<div class="col s10">
      						<p class="collections-title"><strong>Lopez, Quezon</strong></p>
      						<p class="collections-content">Quezon PUP Branch</p>
      					</div>
      					<div class="col s2">
      						<span class="task-cat yellow accent-1 grey-text text-darken-4">475</span>
      					</div>
      				</div>
      			</a>
      		</li>
      		<div id="branch2" class="modal modal-fixed-footer white">
      			<div class="modal-header">
      				<div class="container">
      					<h5>Lopez, Quezon <small>Data Source</small></h5>
      				</div>
      			</div>
      			<div class="modal-content">
      				<table class="striped">
                    <thead>
                      <tr>
                        <th data-field="id">Course</th>
                        <th data-field="name">Enrollees</th>
                        <th data-field="price">Percent</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Diploma in Accounting Management Technology</td>
                        <td>3</td>
                        <td>0.004</td>
                      </tr>
                      <tr>
                        <td>Diploma in Electrical Engineering Technology</td>
                        <td>106</td>
                        <td>0.13</td>
                      </tr>
                      <tr>
                        <td>Diploma in Information Communication Technology</td>
                        <td>159</td>
                        <td>0.20</td>
                      </tr>
                      <tr>
                        <td>Diploma in Office Management Technology</td>
                        <td>207</td>
                        <td>0.26</td>
                      </tr>
                    </tbody>
                  </table>
      			</div>
      			<div class="modal-footer">
      				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
      			</div>
      		</div>
      		<li class="collection-item">
      			<a href="#">
      				<div class="row">
      					<div class="col s10">
      						<p class="collections-title"><strong>Maragondon, Cavite</strong></p>
      						<p class="collections-content">Cavite PUP Branch</p>
      					</div>
      					<div class="col s2">
      						<span class="task-cat yellow accent-1 grey-text text-darken-4">354</span>
      					</div>
      				</div>
      			</a>
      		</li>
      	</ul>
      </div>
      @endsection