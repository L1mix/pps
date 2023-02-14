@extends('index')
@section('title') Blank @endsection

@section('content')
<div class="topnav">
    <nav class="container">

        @if(Auth::user()->role=='admin')
        <a href="{{route('table')}}">Таблица</a>
        <a href="{{route('blank')}}">Анкета</a>
        <a href="{{route('logout')}}">Выход</a>
        @else
        <a href="{{route('blank')}}">Анкета</a>
        <a href="{{route('logout')}}">Выход</a>
        @endif
        
    </nav>
</div>
<div class="container">
    <form action="{{route('blank')}}" method="post" class="form">
        <h2 class="title">
            Анкета заполнения рейтинга ППС
        </h2>
        @csrf
        <div class="punkt ">
            <h3 class="titlePunkt accordion">I. НАУЧНОЕ НАПРАВЛЕНИЕ</h3>
            <div class="panel 1">
                <label class="text accordion">1. Проекты и научное исследование</label>
                <div class="answers panel">
                    <div class="answer"> <p> 1.1 Международные проекты (TUBITAK, COST, Горизонт-2021 и др. </p><p> <input type="checkbox" name="" id="1-1check" value="1000"> <input type="number" min="0" max="5" name="" id="1-1" disabled> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                    <div class="answer"> <p> 1.2 Международные научно-исследовательские проекты совместно с другим университетом:</p> <p> <input type="checkbox" name="" id="1-2check">
                        <select name="123" class="select1" id="1-2" disabled>
                            <option value="500">Руководитель проекта</option>
                            <option value="250">Исполнитель</option>
                        </select>
                        <input type="number" min="0" max="5" name="" id="1-2count" disabled>
                        <input type="file" name="file" id="file" class="file" required disabled> </p>
                    </div>
                    <div class="answer"> <p> 1.3 Грантовые научно-технологические проекты:</p> <p><input type="checkbox" name="" id="1-3check">
                        <select name="123" class="select1"id="1-3" disabled>
                            <option value="400">Руководитель проекта</option>
                            <option value="200">Исполнитель</option>
                        </select>
                        <input type="number" min="0" max="5" name="" id="1-3count" disabled>
                        <input type="file" name="file" id="file" class="file" required disabled>
                        </p>
                    </div>
                    <div class="answer"> <p> 1.4 Внедрение инновационных проектов в производство (коммерциализация РННТД)</p> <p><input type="checkbox" name="" id="1-4check">
                        <select name="123" class="select1"id="1-4" disabled>
                            <option value="500">Руководитель проекта</option>
                            <option value="250">Исполнитель</option>
                        </select>
                        <input type="number" min="0" max="5" name="" id="1-4count" disabled>
                        <input type="file" name="file" id="file" class="file" required disabled>
                        </p>
                    </div>
                    <div class="answer"> <p> 1.5 Договорные, хозяйственные проекты:</p> <p> <input type="checkbox" name="" id="1-5check">
                        <select name="123" class="select1"id="1-5" disabled>
                            <option value="150">Руководитель проекта</option>
                            <option value="50">Исполнитель</option>
                        </select>
                        <input type="number" min="0" max="5" name="" id="1-5count" disabled>
                        <input type="file" name="file" id="file" class="file" required disabled>
                        </p>
                    </div>
                    <div class="answer"> <p> 1.6 Стартап проекты:</p> <p> <input type="checkbox" name="" id="1-6check">
                        <select name="123" class="select1"id="1-6" disabled>
                            <option value="250">Руководитель проекта</option>
                            <option value="150">Исполнитель</option>
                            <option value="1000">Привлечение средств в Эндуамент-фонд</option>
                        </select>
                        <input type="number" min="0" max="5" name="" id="1-6count" disabled>
                        <input type="file" name="file" id="file" class="file" required disabled>
                        </p>
                    </div>
                </div>
                <label class="text accordion">2. Публикации в мировом рейтинге научных индексов </label>
                <div class="answers panel">
                    <div class="answer"><p> 2.1 1 квартиль (процентиль 99-75%) </p> <p> <input type="checkbox" name="" id="2-1check" value="500"><input type="number" min="0" max="5" name="" id="2-1" disabled> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                    <div class="answer"> <p> 2.2 2 квартиль (процентиль 74-50%) </p> <p><input type="checkbox" name="" id="2-2check" value="400"><input type="number" min="0" max="5" name="" id="2-2" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                    <div class="answer"> <p> 2.3 3 квартиль (процентиль 49-35%)</p> <p> <input type="checkbox" name="" id="2-3check" value="340"><input type="number" min="0" max="5" name="" id="2-3" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                    <div class="answer"> <p> 2.4 4 квартиль (процентиль 34-1%)</p> <p> <input type="checkbox" name="" id="2-4check" value="150"><input type="number" min="0" max="5" name="" id="2-4" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                    <div class="answer"> <p> 2.5 Для статей в сборниках конференций (публикации в рейтинге научного индекса)</p>  <p><input type="checkbox" name="" id="2-5check" value="100"><input type="number" min="0" max="5" name="" id="2-5" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                </div>
                <div class="answers">
                    <div class="answer">
                        <p>3. Публикации в научных журналах по списку, предоставленному Комитетом по контролю в сфере образования и науки Министерства образования и науки Республики Казахстан</p>
                        <p><input type="checkbox" name="" id="3check" value="100"><input type="number" min="0" max="5" name="" id="3" disabled> <input type="file" name="file" id="file" class="file" required disabled></p>
                    </div>
                </div>
                <label class="text accordion">4. Публикации </label>
                <div class="answers panel">
                    <div class="answer"><p> 4.1 (учебники, книги, монографии и др., имеющиеся в базе Elsevier, Scopus, Web of Science)</p> <p><input type="checkbox" name="" id="4-1check" value="500"> <input type="number" min="0" max="5" name="" id="4-1count"> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                </div>
                <label class="text accordion">5. Индекс Хирша (h) в мировых рейтингах (в базах Elsevier, Scopus, Web of Science) </label>
                <div class="answers panel">
                    <div class="answer"><p> 5.1	1-h</p> <p><input type="checkbox" name="" id="5-1check" value="50"> <input type="number" min="0" max="5" name="" id="5-1count"> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                    <div class="answer"><p> 5.2	2-h</p> <p><input type="checkbox" name="" id="5-2check" value="100"> <input type="number" min="0" max="5" name="" id="5-2count"> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                    <div class="answer"><p> 5.3	3-h</p> <p><input type="checkbox" name="" id="5-3check" value="200"> <input type="number" min="0" max="5" name="" id="5-3count"> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                    <div class="answer"><p> 5.4	4-h и более</p> <p><input type="checkbox" name="" id="5-4check" value="300"> <input type="number" min="0" max="5" name="" id="5-4count"> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                    <div class="answer"><p> 5.5	количество ссылок (упоминания ППС и исследователей КарИУ друг о друге, не менее 3 ссылок)</p> <p><input type="checkbox" name="" id="5-5check" value="200"> <input type="number" min="0" max="5" name="" id="5-5count"> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                </div>
                <label class="text accordion">6. Патенты на изобретения международного и национального уровня (если владельцем патента является Карагандинский индустриальный университет)</label>
                <div class="answers panel">
                    <div class="answer"><p>6.1	Международный патент – РСТ (зарегистрирован на международном уровне)</p> <p><input type="checkbox" name="" id="6-1check" value="1000"> <input type="number" min="0" max="5" name="" id="6-1count"> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                    <div class="answer"><p> 6.2	Евразийский патент (зарегистрирован в СНГ)</p> <p><input type="checkbox" name="" id="6-2check" value="300"> <input type="number" min="0" max="5" name="" id="6-2count"> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                    <div class="answer"><p> 6.3	Республиканский патент </p> <p><input type="checkbox" name="" id="6-3check" value="200"> <input type="number" min="0" max="5" name="" id="6-3count"> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                </div>
                <label class="text accordion">7. Научное руководство студентами, занявшими призовые места в конкурсах на лучшие научные работы или предметных олимпиадах</label>
                <div class="answers panel">
                    <div class="answer"><p>7.1	Международный уровень</p> <p><input type="checkbox" name="" id="7-1check" value="250"> <input type="number" min="0" max="5" name="" id="7-1count"> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                    <div class="answer"><p>7.2	Республиканский уровень (в списке МОН РК) </p> <p><input type="checkbox" name="" id="7-2check" value="200"> <input type="number" min="0" max="5" name="" id="7-2count"> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                </div>
                <label class="text accordion">8. Обладатели ученых званий, стипендий (в случае дипломов ККСОН МОН РК)</label>
                <div class="answers panel">
                    <div class="answer"><p>8.1	Профессор</p> <p><input type="checkbox" name="" id="8-1check" value="200"> <input type="number" min="0" max="1" name="" id="8-1count"> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                    <div class="answer"><p>8.2	Доцент</p> <p><input type="checkbox" name="" id="8-2check" value="100"> <input type="number" min="0" max="1" name="" id="8-2count"> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                    <div class="answer"><p>8.3	Обладатель ежегодной стипендии Научного комитета Министерства образования и науки Республики Казахстан.</p> <p><input type="checkbox" name="" id="8-3check" value="300"> <input type="number" min="0" max="1" name="" id="8-3count"> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                </div>
                <div class="answers">
                    <div class="answer">
                        <p>9	Научное руководство PhD докторантами (в случае получения диплома ККСОН МОН РК, не более 3)</p>
                        <p><input type="checkbox" name="" id="9check" value="150"><input type="number" min="0" max="5" name="" id="9" disabled> <input type="file" name="file" id="file" class="file" required disabled></p>
                    </div>
                </div>
                <input hidden type="number" name="punkt1" id="puk1">
            </div>
        </div>
        <div class="punkt ">
            <h3 class="titlePunkt accordion">II. АКАДЕМИЧЕСКОЕ НАПРАВЛЕНИЕ</h3>
            <div class="panel 2">
                <label class="text accordion">10. Учебники (не менее 8 п.л.) и учебные пособия (не менее 6 п.л.)</label>
                <div class="answers panel">
                    <div class="answer"> <p> 10.1	С грифом МОН РК </p><p> <input type="checkbox" name="" id="10-1check" value="500"> <input type="number" min="6"  name="" id="10-1" disabled> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                    <div class="answer"> <p> 10.2	Учебник, изданный по решению Республиканского учебно-методического совета.</p> <p> <input type="checkbox" name="" id="10-2check" value="400">
                        <input type="number" min="6" name="" id="10-2count" disabled>
                        <input type="file" name="file" id="file" class="file" required disabled> </p>
                    </div>
                    <div class="answer"> <p> 10.3	Учебники и пособия, рекомендованные к публикации Ученым советом КарИУ (не более 3 наименований)</p> <p><input type="checkbox" name="" id="10-3check">
                        <select name="123" class="select1"id="10-3" disabled>
                            <option value="200">Онлайн курс</option>
                            <option value="200">Виртуальная лаборатория</option>
                            <option value="200">Внедрение новой дисциплины в учебный процесс</option>
                        </select>
                        <input type="number" min="0" max="5" name="" id="10-3count" disabled>
                        <input type="file" name="file" id="file" class="file" required disabled>
                        </p>
                    </div>
                    
                </div>
                <label class="text accordion">11. Академическая мобильность ППС (преподавание в другом вузе не менее 2 недель)</label>
                <div class="answers panel">
                    <div class="answer"><p> 11.1	За рубежом  </p> <p> <input type="checkbox" name="" id="11-1check" value="250"><input type="number" min="0" max="5" name="" id="11-1" disabled> <input type="file" name="file" id="file" class="file" required disabled></p></div>
                    <div class="answer"> <p>11.2	В вузах РК</p> <p><input type="checkbox" name="" id="11-2check" value="150"><input type="number" min="0" max="5" name="" id="11-2" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                </div>
                <div class="answers">
                    <div class="answer">
                        <p>12	Обладатели международной степендии (Rulbright, Chevening) и стипендии «Болашақ»</p>
                        <p><input type="checkbox" name="" id="12check" value="300"><input type="number" min="0" max="1" name="" id="12" disabled> <input type="file" name="file" id="file" class="file" required disabled></p>
                    </div>
                </div>
                <div class="answers">
                    <div class="answer">
                        <p>13	Обладатель гранта «Лучший преподаватель вуза»</p>
                        <p><input type="checkbox" name="" id="13check" value="300"><input type="number" min="0" max="1" name="" id="13" disabled> <input type="file" name="file" id="file" class="file" required disabled></p>
                    </div>
                </div>
                <div class="answers">
                    <div class="answer">
                        <p>14	Победители внутривузовских конкурсов</p>
                        <p><input type="checkbox" name="" id="14check" value="200"><input type="number" min="0" max="1" name="" id="14" disabled> <input type="file" name="file" id="file" class="file" required disabled></p>
                    </div>
                </div>
                <div class="answers">
                    <div class="answer">
                        <p>15   Сертификация (разработка инновационных образовательных программ, наращивание потенциала по наукометрическим базам данных, освоение новой цифровой педагогики, освоение новых цифровых технологий в онлайн - обучении, не менее 72 часов, до 5 позиций)</p>
                        <p><input type="checkbox" name="" id="15check" value="20"><input type="number" min="0" max="1" name="" id="15" disabled> <input type="file" name="file" id="file" class="file" required disabled></p>
                    </div>
                </div>
                <div class="answers">
                    <div class="answer">
                        <p>16	Курсы переподготовки (с приложением к свидетельству о прохождении курсов, с 216 до 864 часов)</p>
                        <p><input type="checkbox" name="" id="16check" value="50"><input type="number" min="0" max="1" name="" id="16" disabled> <input type="file" name="file" id="file" class="file" required disabled></p>
                    </div>
                </div>
                <input hidden type="number" name="punkt2" id="puk2">
            </div>
        </div>
        <div class="punkt">
            <h3 class="titlePunkt accordion">III. ДРУГИЕ НАПРАВЛЕНИЯ</h3>
            <div class="panel 3">
                <label class="text accordion">17.	Коллаборация. Повышение репутации ученых и работодателей. Установление эффективных отношений с отечественными и зарубежными партнерами в качестве экспертов, которые могут заочно оценить деятельность университета: </label>
                <div class="answers panel">
                    <div class="answer"><p> 17.1	Установление официальных контактов с коллегами и регистрация (по подтверждающим документам, скриншоты и т.д.)</p><p>
                        <input type="checkbox" name="" id="17-1check">
                        <select name="123" class="select1" id="17-1" disabled>
                            <option value="60">Установление и регистрация контактов с зарубежными академическими партнерами</option>
                            <option value="30">Установление и регистрация контактов с отечественными академическими партнерами</option>
                            <option value="30">Установление и регистрация контактов с коллегами у зарубежных и отечественных работодателей</option>
                        </select>
                        <input type="number" min="0" max="5" name="" id="17-1count" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p>
                    </div>
                    <div class="answer"><p> 17.2	Участие в опросе образовательной оценки коллег в качестве внешнего эксперта рейтингового агентства (наличие подтверждающих документов и скриншотов и т.д.)</p><p>
                        <input type="checkbox" name="" id="17-2check">
                        <select name="123" class="select1" id="17-2" disabled>
                            <option value="60">Академическая репутация - оценка зарубежных коллег</option>
                            <option value="30">Академическая репутация - оценка отечественных коллег</option>
                            <option value="30">Репутация работодателей - оценка зарубежных и отечественных работодателей</option>
                        </select>
                        <input type="number" min="0" max="5" name="" id="17-2count" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p>
                    </div>
                </div>
                <label class="text accordion">18. Руководство успешными представителями искусства и спортсменами, добившимися результатов на международном и национальном уровнях  </label>
                <div class="answers panel">
                    <div class="answer"><p> 18.1	Победители чемпионатов Мира (Азии), международных соревнований, включенных в официальный список</p><p><input type="checkbox" name="" id="18-1check" value="500"><input type="number" min="0" max="5" name="" id="18-1" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                    <div class="answer"><p> 18.2	Победители отечественных соревнований и чемпионата РК</p><p><input type="checkbox" name="" id="18-2check" value="200"><input type="number" min="0" max="5" name="" id="18-2" disabled> <input type="file" name="file" id="file" class="file" required disabled></p> </div>
                    <div class="answer"><p> 18.3	Руководство студентами, занявших призовые места в творческих конкурсах (не более 5)</p><p> <input type="checkbox" name="" id="18-3check" value="300"><input type="number" min="0" max="5" name="" id="18-3" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                </div>
                
                <label class="text accordion">19. Обладатели наград и премий </label>
                <div class="answers panel">
                    <div class="answer"><p> 19.1 Награды мирового уровня ППС (государственные, международные награды согласно утвержденному официальному списку)</p><p><input type="checkbox" name="" id="19-1check" value="200"><input type="number" min="0" max="5" name="" id="19-1" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                    <div class="answer"><p> 19.2 Награды республиканского уровня ППС (государственные, международные награды согласно утвержденному официальному списку)</p><p><input type="checkbox" name="" id="19-2check" value="100"><input type="number" min="0" max="5" name="" id="19-2" disabled> <input type="file" name="file" id="file" class="file" required disabled></p> </div>
                    <div class="answer"><p> 19.3 Лауреат Государственной премии РК</p><p><input type="checkbox" name="" id="19-3check" value="500"><input type="number" min="0" max="5" name="" id="19-3" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                </div>
                <label class="text accordion">20. Публикации (статьи) об университете в зарубежных и отечественных СМИ</label>
                <div class="answers panel">
                    <div class="answer"><p> 20.1 В зарубежных СМИ</p><p><input type="checkbox" name="" id="20-1check" value="20"><input type="number" min="0" max="5" name="" id="20-1" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                    <div class="answer"><p> 20.2 В республиканских (500 п.см, не менее)</p><p><input type="checkbox" name="" id="20-2check" value="5"><input type="number" min="0" max="5" name="" id="20-2" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                </div>
                <label class="text accordion">21. Мероприятия, проводимые в рамках программы «Рухани жаңғыру» (не более 5)</label>
                <div class="answers panel">
                    <div class="answer"><p> 21.1 Международного уровня</p><p> <input type="checkbox" name="" id="21-1check" value="50"><input type="number" min="0" max="5" name="" id="21-1" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                    <div class="answer"><p> 21.2 Республиканского уровня</p><p><input type="checkbox" name="" id="21-2check" value="30"><input type="number" min="0" max="5" name="" id="21-2" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                    <div class="answer"><p> 21.3 Регионального уровня</p><p><input type="checkbox" name="" id="21-3check" value="20"><input type="number" min="0" max="5" name="" id="21-3" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                </div>
                <label class="text accordion">22. Мероприятия, проводимые в рамках программы «Саналы ұрпақ» (не более 5) </label>
                <div class="answers panel">
                    <div class="answer"><p> 22.1 Международного уровня</p><p> <input type="checkbox" name="" id="22-1check" value="50"><input type="number" min="0" max="5" name="" id="22-1" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                    <div class="answer"><p> 22.2. Республиканского уровня</p><p><input type="checkbox" name="" id="22-2check" value="30"><input type="number" min="0" max="5" name="" id="22-2" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                    <div class="answer"><p> 22.3 Регионального уровня</p><p><input type="checkbox" name="" id="22-3check" value="20"><input type="number" min="0" max="5" name="" id="22-3" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                </div>
                <input hidden type="number" name="punkt3" id="puk3">
            </div>
        </div>
        <div class="punkt">
            <h3 class="titlePunkt accordion">IV. ПОКАЗАТЕЛИ ДЛЯ КАФЕДР И ПРОГРАММ</h3>
            <div class="panel 4">
                <div class="answers">
                    <div class="answer">
                        <p> 23. Внедрение лучших практик в образовательный процесс, образовательные программы ведущих зарубежных вузов по модели франчайзинга (получение франшиз и реструктуризация внутренних процессов: внедрение образовательных программ, внедрение новых образовательных технологий и методов обучения, оценка образования, набор студентов, подбор преподавателей, оценка качества учебного процесса, академическая честность)</p>
                        <p><input type="checkbox" name="" id="23check" value="500"><input type="number" min="0" max="5" name="" id="23" disabled> <input type="file" name="file" id="file" class="file" required disabled></p>
                    </div>
                </div>
                <div class="answers">
                    <div class="answer">
                        <p> 24. Разработка и регистрация в реестре образовательных программ, преподаваемых на иностранном языке (кроме кафедр, обучающихся на иностранном языке)</p>
                        <p><input type="checkbox" name="" id="24check" value="500"><input type="number" min="0" max="5" name="" id="24" disabled> <input type="file" name="file" id="file" class="file" required disabled></p>
                    </div>
                </div>
                <label class="text accordion">25. Разработка и регистрация в реестре образовательных программ</label>
                <div class="answers panel">
                    <div class="answer"><p> 25.1 инновационные ОП</p><p><input type="checkbox" name="" id="25-1check" value="100"><input type="number" min="0" max="5" name="" id="25-1" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                    <div class="answer"><p> 25.2 совместные ОП</p><p><input type="checkbox" name="" id="25-2check" value="200"><input type="number" min="0" max="5" name="" id="25-2" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                    <div class="answer"><p> 25.3 программы двойного диплома</p><p><input type="checkbox" name="" id="25-3check" value="400"><input type="number" min="0" max="5" name="" id="25-3" disabled> <input type="file" name="file" id="file" class="file" required disabled> </p></div>
                </div>
                <div class="answers">
                    <div class="answer">
                        <p>   26. Уровень трудоустройства выпускников вуза</p>
                        <p>
                        <input type="checkbox" name="" id="26check">
                        <select name="123" class="select1"id="26" disabled>
                            <option value="10">50-60</option>
                            <option value="25">61-74</option>
                            <option value="50">свыше 75</option>
                        </select>
                        <input type="number" min="0" max="5" name="" id="26count" disabled>
                        <input type="file" name="file" id="file" class="file" required disabled>
                        </p>
                    </div>
                </div>

                <div class="answers">
                    <div class="answer">
                        <p>
                        27. Уровень трудоустройства выпускников по специальностям
                        </p>
                        <p>
                        <input type="checkbox" name="" id="27check">
                        <select name="123" class="select1"id="27" disabled>
                            <option value="50">между 50-60</option>
                            <option value="75">между 61-80</option>
                            <option value="100">Свыше 81</option>
                        </select>
                        <input type="number" min="0" max="5" name="" id="27count" disabled>
                        <input type="file" name="file" id="file" class="file" required disabled>
                        </p>
                    </div>
                </div>
                <div class="answers">
                    <div class="answer">
                        <p> 28. Привлечение профессора (преподавателя) из-за рубежа (преподавание не менее двух недель)</p>
                        <p>
                        <input type="checkbox" name="" id="28check">
                        <select name="123" class="select1"id="28" disabled>
                            <option value="10">2</option>
                            <option value="20">3-4</option>
                            <option value="30">Свыше 5</option>
                        </select>
                        <input type="number" min="0" max="5" name="" id="28count" disabled>
                        <input type="file" name="file" id="file" class="file" required disabled>
                        </p>
                    </div>
                </div>
                <div class="answers">
                    <div class="answer">
                        <p>29. Общая доля ППС с учеными степенями</p>
                        <p>
                        <input type="checkbox" name="" id="29check">
                        <select name="123" class="select1"id="29" disabled>
                            <option value="25">40-49</option>
                            <option value="50">50-55</option>
                            <option value="75">56-75</option>
                            <option value="100">75</option>
                        </select>
                        <input type="number" min="0" max="5" name="" id="29count" disabled>
                        <input type="file" name="file" id="file" class="file" required disabled>
                        </p>
                    </div>
                </div>
                <div class="answers">
                    <div class="answer">
                        <p> 30 Образовательные программы вуза, повышающие достигнутый уровень в рейтинге Национальной палаты предпринимателей Республики Казахстан «Атамекен» (на каждое место выше, чем в прошлом году)</p>
                        <p><input type="checkbox" name="" id="30check"><input type="number" min="0" max="5" name="" id="30" disabled> <input type="file" name="file" id="file" class="file" required disabled></p>
                    </div>
                </div>
                <label class="text accordion">31 Специальности, входящих в тройку лидеров рейтинга образовательных программ (при условии участия в рейтинге не менее 5 вузов) </label>
                <div class="answers panel">
                    <div class="answer"><p> 31.1 1 место</p><p><input type="checkbox" name="" id="31-1check"><input type="number" min="0" max="5" name="" id="31-1" disabled> <input type="file" name="file" id="file" class="file" required disabled></p> </div>
                    <div class="answer"><p> 31.2 2 место</p><p><input type="checkbox" name="" id="31-2check"><input type="number" min="0" max="5" name="" id="31-2" disabled> <input type="file" name="file" id="file" class="file" required disabled></p> </div>
                    <div class="answer"><p> 31.3 3 место</p><p><input type="checkbox" name="" id="31-3check"><input type="number" min="0" max="5" name="" id="31-3" disabled> <input type="file" name="file" id="file" class="file" required disabled></p> </div>
                </div>
                <input hidden type="number" name="punkt4" id="puk4">
            </div>
        </div>
        <input type="submit" value="Отправить">
    </form>
</div>
@endsection