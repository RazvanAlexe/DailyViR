    <div class="ignore-css">
    <h1>Software Requirements Specification</h1>
    <div>
        <section typeof="sa:AuthorsList">
            <h2>Authors</h2>
            <ul>
              <li typeof="sa:ContributorRole" property="schema:author">
                <span typeof="schema:Person"
                      resource="https://en.wikipedia.org/wiki/John_Henry_Holland">
                  <meta property="schema:givenName" content="Madalina">
                  <meta property="schema:additionalName" content="Bianca">
                  <meta property="schema:familyName" content="Enasel">
                  <span property="schema:name">Madalina B. Enasel</span>
                </span>
              </li>
              <li typeof="sa:ContributorRole" property="schema:author">
                <span typeof="schema:Person"
                      resource="https://en.wikipedia.org/wiki/John_Henry_Holland">
                  <meta property="schema:givenName" content="Catalina">
                  <meta property="schema:additionalName" content="Elena">
                  <meta property="schema:familyName" content="Kissinger">
                  <span property="schema:name">Catalina E. Kissinger</span>
                </span>
              </li>
              <li typeof="sa:ContributorRole" property="schema:author">
                <span typeof="schema:Person"
                      resource="https://en.wikipedia.org/wiki/John_Henry_Holland">
                  <meta property="schema:givenName" content="Razvan">
                  <meta property="schema:additionalName" content="">
                  <meta property="schema:familyName" content="Alexe">
                  <span property="schema:name">Razvan Alexe</span>
                </span>
              </li>
            </ul>
          </section>
        <section>
            <h1>
                Table of Contents
            </h1>
            <ul>
                <li><a href=#1>Introduction</a></li>
                <ul>
                    <li><a href=#1.1>Purpose</a></li>
                    <li><a href=#1.2>Document Conventions</a></li>
                    <li><a href=#1.3>Intended Audience and Reading Suggestions</a></li>
                    <li><a href=#1.4>Product Scope</a></li>
                    <li><a href=#1.5>References</a></li>
                </ul>
                <li><a href=#2>Overall Description</a></li>
                <ul>
                    <li><a href=#2.1>Product Perspective</a></li>
                    <li><a href=#2.2>Product Functions</a></li>
                    <li><a href=#2.3>User Classes and Characteristics</a></li>
                    <li><a href=#2.4>Operating Environment</a></li>
                    <li><a href=#2.5>Design and Implementation Constraints</a></li>
                    <li><a href=#2.6>User Documentation</a></li>
                </ul>
                <li><a href=#3>External Interface Requirements</a></li>
                <ul>
                    <li><a href=#3.1>User Interfaces</a></li>
                    <li><a href=#3.2>Hardware Interfaces</a></li>
                    <li><a href=#3.3>Software Interfaces</a></li>
                    <li><a href=#3.4>Communications Interfaces</a></li>
                </ul>
                <li><a href=#4>Caracteristici de sistem</a></li>
                <ul>
                    <li><a href=#4.1>Organizare</a></li>
                    <li><a href=#4.2>Interactiune</a></li>
                    <li><a href=#4.3>Obiectiv central</a></li>
                </ul>
                <li><a href=#5>Alte cerinte non-functionale</a></li>
                <ul>
                    <li><a href=#5.1>Atribute de calitate software</a></li>
                </ul>
                <li><a href=#6>Other Requirements</a></li>
                <li><a href=#6.1>Appendix A: Glossary</a></li>
                <li><a href=#6.2>Appendix B: Analysis Models</a></li>
                <li><a href=#6.3>Appendix C: To Be Determined List</a></li>
              </ul>
        </section>
        <section >
            <h1 id="1">
                1. Introducere
            </h1>
            <h2 id="1.1">
                1.1 Scop
            </h2>
            <p>
                Aplicatia web descrisa in acest document este DailyViR. 
                Aceasta documentatie v-a acoperi componenta de interfata a aplicatiei precum si componenta functionala a acesteia.
            </p>
            <h2 id="1.2">
                1.2 Conventie de documentatie
            </h2>
            <p>
                Documentul v-a respecta standardele setate de Scholarly HTML.
            </p>
            <h2 id="1.3">
                1.3 Public-tinta si sugestii de citire
            </h2>
            <p>
                Documentul este destinat persoanelor ce doresc o prezentare in general a aplicatiei precum si detalii legate de implementare.
            </p>
            <h2 id="1.4">
                1.4 Domeniul de aplicare al produsului
            </h2>
            <p>
                Scopul produsului este de a reda clipuri video pe o platforma online unde utilizatorii pot edita si urca videouri precum si a lasa comentarii si a observa statistici legate de clipurile dorite. Accesarea acestora se va face prin intermediul unui catalog de videouri, unele videouri avand sansa chiar de a aparea de pagina de videouri trending. Utilizatorul va primi deasemenea si notificari legate de informatii interesante acestuia (Vizualizari video postat, clip popular recent).
            </p>
            <h2 id="1.5">
                1.5 Referinte
            </h2>

        </section>
        <section id="2">
            <h1>
                Overall Description
            </h1>
            <h2 id="2.1"> 
                2.1 Product Perspective

            </h2>
            <p>Aplicatia prezentata  este o versiune noua a platformei YouTube .Noutatile sunt reprezentate de  interfata mult mai usor de inteles deoarece design-ul acesteia este unul minimalist ce se axeaza pe prezentarea informatiei in detrimentul esteticului.In plus platforma are un aspect usor de inteles pentru toate categoriile  de varsta.   </p>

            <h2 id="2.2">
                2.2 Product Functions
            </h2>
            <p>Aplicatia ofera utilizatorului diverse functii.De exemplu utilizatorul poate viziona o multitudine de videoclipuri dintr-o gama larga de categori.Acesta poate posta videoclipuri in aplicatia noatra  ,poate vedea statisticile fiecarui videoclip si ii este prezentat ceea ce se afla in trending .Astfel prin functiile platformei noastre utilizatorul poate sa isi urmareasca interesele dupa cum considera ca este potrivit.      </p>
        
            <h2 id="2.3">
                2.3 User Classes and Characteristics
            </h2>
            <p> Aplicatia  noastra este deschisa tuturor celor interesati de multimedia , de aceea nu exista un public tinta.Cu toate acestea, functiile platformei pot fi folosite inn moduri  diverse in functie de ceea ce utilizatorul doreste sa realizeze prin inntermediul platformei.De exemplu statisticile pot fi folosite  de cei ce doresc sa observe cum sunt apreciate videoclipurile lor ,iar trendingul este de ajutor pentru cei  ce urmaresc anumite tendinte in diverse domenii preecum muzica sau divertismentul.      </p>
        

            <h2 id="2.4">
                2.4 Operating Environment

            </h2>
            <p>
               Aplicatia noastra  poate fi utilizata de oricine are conexiune la internet .Aceasta este suportata de orice sistem de operare ,motorul de cautare  fiind cel care ofera accesul utilizatorului catre aplicatie.
            </p>


            <h2 id="2.5">

                2.5 Design and Implementation Constraints
            </h2>
            <p>
                Singura problema pe care un posibil utilizator o poate intampina in momentul in care foloseste aplicatia noastra daca este o conexiune slaba la internet utilizatorul nu va putea avea o experienta completa .
            </p>
            <h2 id="2.6">
                2.6 User Documentation

            </h2>
            <p>
                Deoarece platforma noastra pune in prim plan experienta utilizatorului ,disgn-ul folosit este unul minimalist deja intalnit in de platforme de social-media ,fapt pentru care nu este nevoie de tutoriale sau manual de utilizare.
            </p>

        <section >
            <h1 id="3">
                External Interface Requirements
            </h1>
            <h2 id="3.1">
                3.1 User Interfaces
            </h2>
            <p>
                Paginile componente ale interfetei vor fi: Pagina de Landing, Login, Signup, Home, Trending, Notifications, View Video, Upload Video, Manage Video, Statistics si User Profile. Majoritatea paginilor vor contine un header ce contine butoanele necesare navigarii site-ului: User Page Button, Search Bar, Home Page button, etc. Paginile vor respecta stiluri CSS comune (font, culori specifice, dimensiuni butoane) precum si conventii comune de realizare a paginilor html (grid design). Interactiunea initiala cu site-ul se va realiza la nivelul paginii de landing unde se prezinta descrierea generala a site-ului precum si optiunile de login sau signup. Daca se realizeaza procesul de signup si login, utilizatorul poate accesa paginile de functionalitate a siteului. Home page-ul reprezinta interfata de catalog a video-urilor disponibile. Pagina de trending prezinta cele mai populare video-uri recente. Paginile de manage video si upload permit utilizatorului sa urce precum sa si editeze video-urile asociate contului. Pagina de user permite utilizatorului sa editeze informatii despre acesta. Pagina de notificari prezinta informatii interesante utilizatorului. Pagina de statistics va prezenta informatii statistice legate de video-ul dorit (Numar vizualizari, nationalitati predominante etc.).
             </p>
            <h2 id="3.2">
                3.2 Hardware Interfaces
            </h2>
            <p>
                Se intentioneaza ca pagina web sa poata fi utilizata de un browser pe calculator, laptop dar si device-uri portabile precum tablete si smartphone-uri.
            </p>
            <h2 id="3.3">
                3.3 Software Interfaces
            </h2>
            <p>
                Site-ul va utiliza o baza de date MySQL pentru a stoca informatiile necesare functionarii site-ului (Informatii useri, informatii video-uri). Fiecare clip video va utiliza player-ul video utilizat de site-ul Vimeo.
            </p>
            <h2 id="3.4">
                3.4 Communications Interfaces
            </h2>
            <p>
                Pentru creerea unui cont v-a fi necesar o adresa de email cu care se poate realiza, eventual, o comunicare daca este dorit (advertisement emails). Unele pagini vor face diferite tipuri de request-uri altor pagini din cadrul site-ului (Pagina de Login va accesa home page-ul cu anumiti parametrii).
            </p>           
        </section>
        <section>
            <h1 id="4">
                Caracteristici de sistem
            </h1>
            <p>Aceasta aplicatie web are scopul de a facilita accesul utilizatorilor la un catalog divers de materiale
                video. Printre caracteristicile de sistem avem:</p>

            <h2 id="4.1">
                4.1. Organizarea:
            </h2>
            <p>
                Sunt folosite blocuri care contin mai multe elemente. Unele elemente continand si ele alte elemente. Scopul
                acestui mod de organizare este a usura receptivitatea codului.
            </p>
            <h2 id="4.2">
                4.2. Interactiunea
            </h2>
            <p>Aceasta caracteristica se refera la interdependenta claselor, cat si la etichetele div/ span. </p>
            <p>
                In ceea ce privesc clasele, multe din proprietatile lor de redimensionare depind de clasele pe care le
                mostenesc, datorita utilizarii "%" ca unitate relativa de masura
            </p>
            <p>
                In cazul etichetelor div/ span, ele sunt incluse in alte etichete, fie includ alte etichete, ceea ce
                modifica rezultatul final
            </p>
            <h2 id="4.3">
                4.3. Obiectiv central
            </h2>
            <p>
                Obiectuvul propus este punerea la dispozitia clientului, intr-un mod facil si placut estetic, a comenzilor
                diverse(postarea de comentarii, vizualizarea videoclipurilor, ect.).
            </p>

        </section>
        <section>
            <h1 id="5">
                Alte cerinte non-functionale
            </h1>
            <h2 id="5.1">
                5.1. Atribute de calitate software
            </h2>
            <p>Aplicatia este:</p>
            <ul>
                <li>intuitiv de utilizat </li>
                <li>corecta sintactic atunci cand este utilizata ca atare</li>
                <li>flexibila: posibile schimbari in design se pot face relativ usor</li>
                <li>usor de intretinut</li>
                <li>fiabila</li>
                <li>robust</li>
                <li>utilizabila (indiferent de titlul utilizatorului)</li>
            </ul>

        </section>
        <section>
            <h1 id="6">
                Other Requirements
            </h1>
            <p>
                Define any other requirements not covered elsewhere in the SRS. This might include database requirements, internationalization requirements, legal requirements, reuse objectives for the project, and so on. Add any new sections that are pertinent to the project.
            </p>
            <h2 id="6.1">
                Appendix A: Glossary
            </h2>
            <p>
                Identify the product whose software requirements are specified in this document, including the revision or release number. Describe the scope of the product that is covered by this SRS, particularly if this SRS describes only part of the system or a single subsystem.
            </p>
        </section>
    </div>
    <div>