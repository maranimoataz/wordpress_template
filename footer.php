<footer id="main-footer" class="site-main-footer">
    <div class="content">
        <div class="footer-contact" itemscope itemtype="http://schema.org/Organization">
            <div class="logo-structure">
                <img itemprop="logo" src="https://firebasestorage.googleapis.com/v0/b/ecomm-projet.appspot.com/o/Logo-EST-Sidi-Bennour.jpg?alt=media&token=69abe000-c9bc-46d3-a5b4-f816038be86c"/>
            </div>

            <h3 itemprop="legalName">Services administratifs</h3>
            <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"></p>

            <span>avenue Jabran Khalil، El Jadida 24000</span><br/>
            <p>
                <i aria-hidden="true" class="fas fa-phone"></i><span itemprop="telephone"> (+212) 05 23 34 44 48</span><br/>
                <i aria-hidden="true" class="fas fa-fax"></i><span itemprop="fax">(+212) 05 23 34 44 49</span>
            </p>
            <p><a href="mailto:maranimouataz@gmail.com" class="btn">Envoyer un mail</a></p>
        </div>
        <div class="footer-map">
            <script>

                var mymap=L.map('footermap').setView([33.227456,-8.489211],20);
                L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw',
                    {maxZoom:18,
                        attribution:'',
                        id:'mapbox.streets',
                        style:'https://openmaptiles.github.io/osm-bright-gl-style/style-cdn.json'
                    }).addTo(mymap);
                var marker1=L.marker([33.226882,-8.488155]).addTo(mymap).bindPopup('Faculté des Lettres et des Sciences Humaines');var marker2=L.marker([33.226036, -8.486921]).addTo(mymap).bindPopup('Faculté des Sciences');
                var marker3=L.marker([33.227456, -8.489211]).addTo(mymap).bindPopup('Ecole Supérieure de Technologi Sidi Bennour');var marker4=L.marker([33.228504, -8.488841]).addTo(mymap).bindPopup('رئاسة جامعة شعيب الدكالي Presidency of Shoaib Dokkali University\n');
                var group=new L.featureGroup([marker1,marker2,marker3,marker4]);mymap.fitBounds(group.getBounds());

            </script>
        </div>
    </div>
</footer>


<footer id="bottom-footer" class="site-bottom-footer">
    <div class="content">
        <div class="footer-websites">
            <p><a >Tous nos sites <i aria-hidden="true" class="fa fa-angle-down"></i></a></p>
            <div  class="menubox">
                <div class="menubox-content">
                    <div class="close"><a aria-label="Fermer le menu"  title="Fermer le menu"><i aria-hidden="true" class="fa fa-times"></i></a></div>
                    <h2>Tous nos sites</h2>
                    <nav class="menubox-nav" role="navigation">
                        <div class="menu-menu-principal-container">
                            <ul id="main-menu" class="menu">
                                <li id="menu-ufr" class="menu-item menu-item-has-children"><a href="javascript:opensubmenu('menu-ufr');" title="Voir les UFR">Ecoles Nationales des Sciences Appliquées</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a target="_blank" href="http://www.ensaj.ucd.ac.ma/" title="Visitez le site web de ensa El jadida">Ecoles Nationales des Sciences Appliquées El jadida</a></li>
                                    </ul>
                                </li>
                                <li id="menu-ecoles" class="menu-item menu-item-has-children"><a title="Voir les écoles">Ecoles Nationales de Commerce et Gestion</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="http://www.encgj.ucd.ac.ma/" title="Visitez le site web de ENCG El jadida">Ecoles Nationales de Commerce et Gestion El jadida</a></li>
                                    </ul>
                                </li>
                                <li id="menu-insituts" class="menu-item menu-item-has-children"><a  title="Voir FACULTÉ DES LETTRES ET DES SCIENCES HUMAINES.">Faculté des Lettres et des Sciences Humaines</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a target="_blank" href="http://www.fsjesj.ucd.ac.ma/" title="Visitez le site web de Faculté des Lettres et des Sciences Humaines d'el jadida">Faculté des Lettres et des Sciences Humaines d'El-Jadida</a></li>
                                    </ul>
                                </li>
                                <li id="menu-services" class="menu-item menu-item-has-children"><a  title="Voir les services communs">faculté des sciences</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a target="_blank" href="http://www.fs.ucd.ac.ma/" title="Site du faculté des sciences">faculté des sciences d'eljadida</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<footer id="legal-footer" class="site-legal-footer" role="contentinfo">
    <p>created by  <a href=""> marani moataz</a></p>
</footer>
