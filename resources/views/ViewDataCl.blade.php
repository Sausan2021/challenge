@extends('layouts.app')

@section('content')
<div class="center m-3">
<div class="container">
    <h2>Show Classes Details</h2>
    <div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">


        <div id="link">
            <div style="width: 100%; height: 100%">
            <table>
                <tr class="accept link_1">
                <td><a href="/Classes" value="link_1">Classes Details</a></td>
                    
                </tr>
            </table>
             </div>
        </div>
    </div>
    <script>
     $(".accept").click(function() {
            $(".hidden_div").show("slow");
            $("#link").hide("slow");
            if($(this).hasClass("link_1")){
            	$("#link_1").show("slow");
            }
            if($(this).hasClass("link_2")){
            	$("#link_2").show("slow");
            }
            
        });

            $("#close_tab_button").click(function() {
            $("#link_1").hide("slow");
            $("#link_2").hide("slow");
            $(".hidden_div").hide("slow");
            $("#link").show("slow");
            //$($this).hide("slow");

        });     

 </script>
</div>
</div>
@endsection
