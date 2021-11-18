@extends('layout')
@section('content')
<style>
body{
    background-color:#7979798f;
}
</style>
    <body>
        <form action="recordaward" method="GET">
            <fieldset style="margin:150px auto;border-radius: 5px;background:white;padding: 100px;text-align:center">
                <legend>Record Award</legend>
                <table>
                    <tr>
                        <td><label>Award Name</label></td>
                        <td><input type="text" name="award_name"></td>
                    </tr>
                    <tr>
                        <td><label>Award Date</label></td>
                        <td><input type="date" name="award_date"></td>
                    </tr>
                    <tr>
                        <td><label>Award Details</label></td>
                        <td><input type="text" name="award_details"></td>
                    </tr>
                </table>
                <a href="recordaward"><input type="submit" value="Submit"></a>
                <input type="reset" value="Clear">
                <a href="first"><button>Back</button></a>
            </fieldset>
        </form>
        <br>
        
    </body>
    @endsection