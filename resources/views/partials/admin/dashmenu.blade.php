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
        <li role="presentation" class="hover_red">
            <a href="#">
                <span class="glyphicon glyphicon-wrench left" aria-hidden="true"></span> Instellingen
            </a>
        </li>
        <li role="presentation" class="hover_green">
            <a href="/beheer/activiteit">
                <span class="glyphicon glyphicon-list-alt left" aria-hidden="true"></span> Activiteiten
            </a>
            <ul>
                <li class="hover_blue">
                    <a href="/beheer/activiteit/create">
                        <span class="glyphicon glyphicon-plus left" aria-hidden="true"></span> Toevoegen
                    </a>
                </li>
            </ul>
        </li>
        <li role="presentation" class="hover_green">
            <a href="/beheer/categorie">
                <span class="glyphicon glyphicon-tags left" aria-hidden="true"></span> Categorieën
            </a>
            <ul>
                <li class="hover_blue">
                    <a href="/beheer/categorie/create">
                        <span class="glyphicon glyphicon-plus left" aria-hidden="true"></span> Toevoegen
                    </a>
                </li>
            </ul>
        </li>
        <li class="smallDevice" role="presentation">
            <a href="#">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Profiel
            </a>
        </li>
        <li class="smallDevice" role="presentation">
            <a href="#">
                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Uitloggen
            </a>
        </li>
    </ul>
</div>
