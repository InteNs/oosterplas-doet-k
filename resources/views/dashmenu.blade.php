
<div class="sidebar col-md-2 col-sm-12">
    <ul class="nav nav-pills nav-stacked">

        <!--
            Voor gebruikerservaring te verhogen gebruik kleuren
            Plaats de volgende waarde in de class van een <li>
            - "hover_green"
            - "hover_orange"
            - "hover_blue"
            - "hover_red"
        -->
        <li class="smallDevice"  role="presentation"><a href="#"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Profiel</a></li>
        <li class="smallDevice"  role="presentation"><a href="#"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Uitloggen</a></li>
        <li role="presentation" class="hover_green"><a href="#"><span class="glyphicon glyphicon-plus left" aria-hidden="true"></span>  Toevoegen</a></li>
        <li role="presentation" class="hover_blue"><a href="#"><span class="glyphicon glyphicon-list-alt left" aria-hidden="true"></span> Alle berichten</a></li>
        <li role="presentation" class="hover_red"><a href="#"><span class="glyphicon glyphicon-wrench left" aria-hidden="true"></span>  Instellingen</a></li>
    </ul>
</div>
<style>
    body{
        margin: 0px;
    }
    .top{
        background-color: #2e3436;
        border-bottom: 1px solid #f2f2f2;
        height: 50px;
        color: #f2f2f2;
    }

    .top-item-escape{
        font-size: 24px;

    }

    .top-item-escape >a{
        color: #f2f2f2;

    }

    .top-item{
        margin-top: 10px;
        font-size: 16px;
    }

    .top-item > a{
        color: #f2f2f2;
    }
    .sidebar{
        background-color: #2e3436;
        color: #f2f2f2;
        height: 100%;
        padding-top: 5px;
        padding-bottom: 5px;
    }
    .sidebar-item a{
        color: #f2f2f2;
    }
    .nav .nav-pills .nav-stacked li a{
        color: #f2f2f2;
    }

    .right{
        float: right;
        display:none;
    }
    .dashboard {
        overflow: hidden;
        margin-top: 1px;
    }
    .nav-pills > li.active > a{
        background-color: #f2f2f2;
        color: #2e3436;
    }
    .nav > li > a{
        color: #f2f2f2;
    }
    .nav-pills > li.active > a:focus, .nav > li > a:focus{
        color: #2e3436;
    }
    .nav-pills > li.active > a:hover, .nav > li > a:hover{
        color: #2e3436;
    }

    /* Extra Small Devices, Phones */
    @media only screen and (min-width : 480px) {

        .top{
            padding-top: 6px;
        }

    }
    /* Medium Devices, Desktops */
    @media only screen and (min-width : 992px) {
        .right{
            display: inline-block;
            float: right;
        }

        .nav >  .smallDevice{
            display: none;
        }
    }
    .hover_red:hover{
        color: #f2f2f2;
    }
    .nav-pills > li.active > .hover_red > a:hover, .nav > .hover_red > a:hover{
        color : #f2f2f2;
        background: #DB3912;
    }

    .nav-pills > li.active > .hover_orange > a:hover, .nav > .hover_orange > a:hover{
        color : #f2f2f2;
        background: #FE9900;
    }

    .nav-pills > li.active > .hover_blue > a:hover, .nav > .hover_blue > a:hover{
        color : #f2f2f2;
        background: #4584Ed;
    }

    .nav-pills > li.active > .hover_green > a:hover, .nav > .hover_green > a:hover{
        color : #f2f2f2;
        background: #2ae212;
    }













</style>