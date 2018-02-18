@extends('master')

@section('title', 'System Setup')

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
      <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Mr. Admin<i class="mdi-navigation-arrow-drop-down right"></i></a>
      <p class="user-roal">Administrator</p>
    </div>
  </div>
</li>
<li class="bold active">
  <a href="#" class="waves-effect waves-deep-teal teal-text">
    <i class="mdi-action-settings"></i> System Setup
  </a>
</li>
<li class="bold">
  <a href="#" class="waves-effect waves-deep-teal">   
    <i class="mdi-action-settings"></i> Evaluation Setup
  </a>
</li>


@endsection

@section('charts')

<div class="col l12">
  <h1>Report Submission <small>{{ Request::is('modules/publication/ipo/submission') ? 'IPO' : 'Registrar' }}</small></h1>
  <hr>
  <div id="container">
    <p>{{ Request::is('modules/publication/ipo/submission') ? 'PUP BRANCH AND CAMPUSES: ' : '' }}</p>
    @if (Request::is('modules/publication/ipo/submission'))
    <div class="row">
      <div class="col s4">
        <div class="select-wrapper initialized"><span class="caret">▼</span>
          <select class="initialized">
            <option value="" disabled="" selected="">Choose branch/campus</option>
            <option value="1">Data Source: Database</option>
            <option value="2">Data Source: Database</option>
            <option value="3">Data Source: Database</option>
          </select>
        </div>
      </div>
      <div class="col s6">

      </div>
      <div class="col s2 right">
        <a class="waves-effect waves-light btn modal-trigger yellow darken-1 grey-text text-darken-3" href="#uploadxlsx"">Upload</a>
        <div id="uploadxlsx" class="modal modal-fixed-footer white">
          <div class="modal-header">
            <div class="container">
              <h5>Upload Excel Reports</h5>
            </div>
          </div>
          <div class="modal-content">
            <form>
              <div>
                <div class="file-field input-field">
                  <div class="btn yellow darken-1 grey-text text-darken-3">
                    <span>File</span>
                    <input type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">

            <a href="#!" class="waves-effect waves-green btn-flat">Save</a>
            <a href="#!" class="waves-effect waves-green btn-flat">Publish</a>

            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
          </div>
        </div>
      </div>
    </div>  
    <hr>
  </div>
</div>
@endif
<div class="col s12">
  <h1>Manual Report Input <small>{{ Request::is('modules/publication/ipo/submission') ? 'IPO' : 'Registrar' }}</small></h1>
  <script data-jsfiddle="common" src="{{ URL::asset('plugins/handsontable/handsontable.full.js') }}"></script>
  <link data-jsfiddle="common" rel="stylesheet" media="screen" href="{{ URL::asset('plugins/handsontable/handsontable.full.css') }}">

  <div class="rowLayout">
    <div class="descLayout">
      <div class="pad">
      </div>

      <div class="pad" data-jsfiddle="example">
        <div id="example"></div>
      </div>
    </div>
    <script data-jsfiddle="example">
      var
      data = [
      ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''],
      ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''],
      ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''],
      ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''],
      ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''],
      ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''],
      ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''],
      ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '']
      ],
      container = document.getElementById('example'),
      hot;

      hot = new Handsontable(container, {
        data: data,
        minSpareRows: 1,
        colHeaders: true,
        contextMenu: true
      });

    </script>
  </div>

  <script type="text/javascript">
    var showSourceElements = document.querySelectorAll('.show-source');

    for(var i = 0; i < showSourceElements.length ; i++) {
      var showElem = showSourceElements[i];
      showElem.addEventListener('mousedown', function (event) {
        event.preventDefault();

        if(showElem.className.indexOf('shown') > -1) {
          showElem.className = showElem.className.replace('shown', '');
        } else {
          showElem.className += ' shown';
        }

        var preJS = document.querySelectorAll('pre.javascript');
        for(var j = 0; j < preJS.length; j++) {
          if(preJS[j].style.display == '') {
            preJS[j].style.display = 'block';
          } else {
            preJS[j].style.display = '';
          }
        }

        var codeLay = document.querySelectorAll('.codeLayout');
        for(var j = 0; j < codeLay.length; j++) {
          if(codeLay[j].className.indexOf('codeLayoutExpanded') > -1) {
            codeLay[j].className = codeLay[j].className.replace('codeLayoutExpanded', '');
          } else {
            codeLay[j].className += ' codeLayoutExpanded';
          }
        }

      });
    }

    var verHolders = document.querySelectorAll('.ver');
    for(var i = 0; i < verHolders.length; i++) {
      var verText = document.createTextNode(hot.version);
      verHolders[i].appendChild(verText);
    }
  </script>
  <br>
  <div class="">
    <a class="btn btn-default submit teal darken-1">Save</a>
    &nbsp;
    <a class="btn btn-default submit yellow darken-1 grey-text text-darken-3">Submit</a>
    &nbsp;
    <a class="btn btn-default submit yellow darken-1 grey-text text-darken-3">View Saved Report</a>
  </div>
  <br>
</div>
</div>
</div>

@endsection

@section('tables')

@endsection
