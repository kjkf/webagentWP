<footer class="footer bg-navy" id="contacts">
    <div class="container">
        <h2 class="title">Связаться  с нами</h2>
        <p>Напишите нам и мы просчитаем стоимость верстки Вашего макета или ответим на Ваши вопросы.</p>
        <?php
                echo do_shortcode('[contact-form-7 id="96" title="contactForm"]'); 
        //echo do_shortcode('[ninja_form id=2]');
            ?>
        <!-- <form class="appl-form">
            <div class="appl-form-wrap">
                <div class="appl-form-left">
                    <div class="input-wrap">
                        <label class="input-label">Ваше имя:</label>
                        <input type="text" placeholder="Имя" class="input-field">
                    </div>
                    <div class="input-wrap">
                        <label class="input-label">Ваш e-mail:</label>
                        <input type="email" placeholder="e-mail" class="input-field">
                    </div>
                    <div class="input-wrap">
                        <label class="input-label">Файл:</label>
                        <label for="upload_input" class="input-upload input-field">
                            <span class="input-upload-val">Загрузить файл</span>
                            <span class="input-upload-btn">Загрузить</span>
                            <input type="file" id="upload_input">
                        </label>
                        <span class="sm-text">*Здесь вы можете приложить техническое задание или макет </span>
                    </div>
                </div>
                <div class="appl-form-right">
                    <div class="input-wrap">
                        <label class="input-label">Тема:</label>
                        <div class="input-select">
                            <select>
                                <option value="0">Калькуляция стоимости</option>
                                <option value="1">1000</option>
                                <option value="2">2000</option>
                                <option value="3">3000</option>
                                <option value="4">4000</option>
                                <option value="5">5000</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-wrap">
                        <label class="input-label">Ваше сообщение:</label>
                        <textarea cols="10" rows="3" class="input-field" placeholder="Сообщение"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-sumbit">Отправить</button>
            </div>
        </form> -->
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>