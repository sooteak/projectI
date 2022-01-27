@extends('user.layout')
<link rel="icon" href="/images/favicon.png" type="image/png" sizes="16x16">
<title>forum</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="main.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<!-- Modal -->
<div method="POST">
    {{-- <div id="ReplyModal" class="modal fade" role="dialog">
        <div class="modal-dialog" >

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"></button>
              <h4 class="modal-title">Reply Question</h4>
            </div>
            <div class="modal-body">
              <form name="frm1" method="post">
                  <input type="hidden" id="commentid" name="Rcommentid">
                  <div class="form-group">
                    <label for="usr">Write your name:</label>
                    <input type="text" class="form-control" name="Rname" required>
                  </div>
                  <div class="form-group">
                    <label for="comment">Write your reply:</label>
                    <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
                  </div>
                   <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
                   @csrf
            </form>
            </div>
          </div>

        </div>
      </div> --}}

      <div class="container"  style="margin: 200px">

      <div class="panel panel-default" style="margin-top:50px">
        <div class="panel-body">
          <h3>Community forum</h3>
          <hr>
          <form name="frm" method="POST">
              <input type="hidden" id="commentid" name="Pcommentid" value="0">
          <div class="form-group">
            <label for="usr">Write your name:</label>
            <input type="text" class="form-control" name="name" required>
          </div>
          <div class="form-group">
            <label for="comment">Write your question:</label>
            <textarea class="form-control" rows="5" name="question" required></textarea>
          </div>
           <input type="submit" id="butsave" name="save" class="btn btn-primary" value="Send">
           @csrf
        </form>
        </div>
      </div>


      <div class="panel panel-default">
        <div class="panel-body">
          <h4>Recent questions</h4>
          <table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
            <tbody id="record">
              @foreach ($forum as $forums)
                  {{ $forums->name }} :{{ $forums->question }}

              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      </div>
      @csrf
</div>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

