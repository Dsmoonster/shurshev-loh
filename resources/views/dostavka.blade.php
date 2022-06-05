@extends('layouts/main')
@section('content')
                <main>
                    <div class="lkb">
                        <div class="menu">
                            <button onclick="window.location.href = '{{ route('oplata') }}'">Оплата</button>
                            <button onclick="window.location.href = '{{ route('dostavka') }}'">Условия доставки</button>
                            <button onclick="window.location.href = '{{ route('garant') }}'">Гарантия на товар</button>
                            <button onclick="window.location.href = '{{ route('lkb') }}'">Личный кабинет</button><br><br>
                            <button class="exit_button" onclick="window.location.href = 'index.html'">Выход</button>
                        </div>
                    <div class="info_lkb">

                        <h3>Почта России</h3><br>

                        <p>
                          • Срок: 5-12 дней. <br>
                        • Стоимость от 200 руб.<br><br>
                        </p>


                        <h3>Почта России (EMS курьер)</h3><br>
                        <p>
                           • Срок: 3-7 дней. <br>
                        • Стоимость от 550 руб.<br><br>
                        </p>


                        <h3>Почта России (1 класс)</h3><br>
                        <p>
                          • Возможна только для малогабаритных грузов весом до 2,5 кг.<br>
                        • Срок: 2-5 дней.<br>
                        • Стоимость от 250 руб.
                        </p>

                        <br><br>
                        <h3>Внимание: сроки зависят от удаленности места доставки от г. Тольятти. Стоимость доставки рассчитывается ориентировочно в зависимости от веса, дальности и объявленной ценности посылки (заказа)</h3><br><br>

                        <h3>Транспортные компании</h3><br><br>
                        <p>
                           Отправим одной из представленных ниже ТК, имеющих представительство в Вашем городе.

                        Срок: 2-10 дней. Зависит от удаленности точки доставки от г. Тольятти

                        Стоимость: от 250 руб. Зависит от веса и дальности доставки

                        Отправление заказов транспортными компаниями осуществляется при 100% предоплате.

                        </p>
                       <br><br>
                       <p>
                         • ПЭК  <br>
                         • СДЭК<br>
                         • Энергия<br>
                         • Деловые линии<br>
                         • GTD<br><br>
                       </p>


                        <p>Стоимость доставки рассчитывается автоматически, при оформлении заказа можете выбрать наиболее предпочтительный по срокам и стоимости. Если у вас возникают затруднения, можете оформить заказ любым способом и наш менеджер, позвонив для подтверждения заказа, порекомендует самый оптимальный способ, в какой бы точке России вы не проживали.
                       </p> <br><br>
                        <h3>Внимание!</h3> Вне зависимости от выбранного способа доставки, проверяйте целостность товара и упаковки при получении.
                        <br><br>
                        <p>
                          Обращаем дополнительное внимание на то, что все хрупкие товары (стекло, пластмассовые изделия, фары и т.д.) по умолчанию отправляются в дополнительной упаковке от ТК, которая является платной. Отправка без нее возможна только в случае, если вы берете на себя ответственность за целостность товара. Для этого сделайте пометку в комментарии при оформлении заказа. Дополнительная информация — по номеру телефона или у менеджера.

                          В случае предоставления Покупателем недостоверной информации и контактных данных, Продавец за ненадлежащее исполнение Заказа ответственности не несет.

                        </p> <br><br>
                        <h3>Сроки формирования</h3><br>
                        <p>
                          • Сроки формирования заказов с позициями «В наличии»: 1-4 рабочих дня (в субботу и воскресенье заказы не формируются);<br>
                        • Сроки формирования заказов, включающих услугу по покраске: 7-12 рабочих дней;<br>
                        • Сроки формирования заказов, включающих услугу по покраске или пошиву изделий из кожи: 7-12 рабочих дней;<br>
                        • Сроки формирования заказов, позиций «под заказ» от 14 дней, более подробную информацию уточняйте по номеру телефона. <br><br>

                        Если заказ сделан до 12:00, днем начала формирования считается текущий день. Заказы, оформленные после 12:00 начинают формироваться на следующий день.

                        </p>

                    </div>
                   </div>

                </main>
@endsection
