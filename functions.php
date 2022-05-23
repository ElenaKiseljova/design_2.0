<?php 
  /* design */
  
  add_action('wp_enqueue_scripts', 'design_styles', 3);
  add_action('wp_enqueue_scripts', 'design_scripts', 5);
  
  // Styles theme
  function design_styles () {
    wp_enqueue_style('design-style', get_stylesheet_uri());
  }

  // Scripts theme
  function design_scripts () {
    wp_enqueue_script('gsap-script', get_template_directory_uri() . '/assets/js/libs/gsap/gsap.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('scroll-trigger-script', get_template_directory_uri() . '/assets/js/libs/gsap/scroll-trigger.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('three-script', get_template_directory_uri() . '/assets/js/libs/three/three.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('tween-max-script', get_template_directory_uri() . '/assets/js/libs/gsap/tween-max.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('hover-effect-script', get_template_directory_uri() . '/assets/js/libs/hover-effect/hover-effect.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/libs/swiper/swiper.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('locomotive-scroll-script', get_template_directory_uri() . '/assets/js/libs/locomotive-scroll/locomotive-scroll.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('disabled-scroll-script', get_template_directory_uri() . '/assets/js/libs/disabled-scroll/disabled-scroll.js', $deps = array(), $ver = null, $in_footer = true );

    // <!-- Старт и отследживание скролла -->
    wp_enqueue_script('smooth-scroll-start-script', get_template_directory_uri() . '/assets/js/smooth-scroll-start.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('preloader-script', get_template_directory_uri() . '/assets/js/preloader.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('animation-image-script', get_template_directory_uri() . '/assets/js/animation-image.js', $deps = array('jquery'), $ver = null, $in_footer = true );
    wp_enqueue_script('magnetic-buttons-script', get_template_directory_uri() . '/assets/js/magnetic-buttons.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('hover-script', get_template_directory_uri() . '/assets/js/hover.js', $deps = array(), $ver = null, $in_footer = true );

    if (is_front_page(  ) && !is_home(  )) {
      wp_enqueue_script('parallax-script', get_template_directory_uri() . '/assets/js/parallax.js', $deps = array(), $ver = null, $in_footer = true );
    }

    wp_enqueue_script('cursor-script', get_template_directory_uri() . '/assets/js/cursor.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('rolling-text-script', get_template_directory_uri() . '/assets/js/rolling-text.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('marquee-script', get_template_directory_uri() . '/assets/js/marquee.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('calculate-height-script', get_template_directory_uri() . '/assets/js/calculate-height.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('slider-script', get_template_directory_uri() . '/assets/js/slider.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('hamburger-script', get_template_directory_uri() . '/assets/js/hamburger.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('achors-script', get_template_directory_uri() . '/assets/js/achors.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('input-border-script', get_template_directory_uri() . '/assets/js/input-border.js', $deps = array(), $ver = null, $in_footer = true );
    wp_enqueue_script('form-script', get_template_directory_uri() . '/assets/js/form.js', $deps = array(), $ver = null, $in_footer = true );

    wp_enqueue_script('smooth-scroll-end-script', get_template_directory_uri() . '/assets/js/smooth-scroll-end.js', $deps = array(), $ver = null, $in_footer = true );
    
    if (is_singular( 'cases' )) {
      wp_enqueue_script('select-script', get_template_directory_uri() . '/assets/js/select.js', $deps = array(), $ver = null, $in_footer = true );
    }

    // AJAX
    $args = array(
      'url' => admin_url('admin-ajax.php'),
      'nonce' => wp_create_nonce('design_nonce'),
    );

    $design_settings_names = get_option( 'design_settings_names' );

    // reCAPTCHA v3
    $site_key = $design_settings_names['recaptcha'] ?? false;

    if ( $site_key && !empty($site_key) ) {
      wp_enqueue_script('recaptcha-script', 'https://www.google.com/recaptcha/api.js?render=' . $site_key, $deps = array(), $ver = null, $in_footer = true );
      
      $args['site_key'] = $site_key;
    }

    wp_localize_script( 'form-script', 'design_ajax', $args);   
  }

  add_action( 'after_setup_theme', 'design_after_setup_theme_function' );

  if (!function_exists('design_after_setup_theme_function')) :
    function design_after_setup_theme_function () {
      load_theme_textdomain('design', get_template_directory() . '/languages');

      /* ==============================================
      ********  //Миниатюрки
      =============================================== */
      add_theme_support( 'post-thumbnails' );

      /* ==============================================
      ********  //Title
      =============================================== */
      add_theme_support('title-tag');
      
      /* ==============================================
      ********  //Лого
      =============================================== */
      add_theme_support( 'custom-logo' );
      
      /* ==============================================
      ********  //Меню
      =============================================== */
      register_nav_menu( 'top_menu', 'Навигация в шапке сайта' );
      register_nav_menu( 'bottom_menu', 'Навигация в подвале сайта' );

      /* ==============================================
      ********  //Размеры картирок
      =============================================== */
      
      add_image_size( 'design_gallery', 888, 500, false);
      add_image_size( 'design_gallery_mobile', 290, 270, true);
      add_image_size( 'design_case_content', 582, 450, false);
    }
  endif;

  // Init
  add_action( 'init', 'design_init_function' );
  
  if (!function_exists('design_init_function')) :
    function design_init_function () {
      /* ==============================================
      ********  //Регистрация кастомных типов постов
      =============================================== */
      function register_custom_post_types () {
        register_post_type( 'cases', [
          'label'  => null,
          'labels' => [
            'name'               => 'Кейсы', // основное название для типа записи
            'singular_name'      => 'Кейс', // название для одной записи этого типа
            'add_new'            => 'Добавить кейс', // для добавления новой записи
            'add_new_item'       => 'Добавление кейса', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование кейса', // для редактирования типа записи
            'new_item'           => 'Новый кейс', // текст новой записи
            'view_item'          => 'Смотреть кейс', // для просмотра записи этого типа.
            'search_items'       => 'Искать кейс в архиве', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Кейсы', // название меню
          ],
          'description'         => 'Это наши Кейсы',
          'public'              => true,
          'publicly_queryable'  => true, // зависит от public
          'exclude_from_search' => true, // зависит от public
          'show_ui'             => true, // зависит от public
          'show_in_nav_menus'   => true, // зависит от public
          'show_in_menu'        => true, // показывать ли в меню адмнки
          'show_in_admin_bar'   => true, // зависит от show_in_menu
          'show_in_rest'        => true, // добавить в REST API. C WP 4.7
          'rest_base'           => null, // $post_type. C WP 4.7
          'menu_position'       => 6,
          'menu_icon'           => 'dashicons-images-alt',
          //'capability_type'   => 'post',
          //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
          //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
          'hierarchical'        => false,
          'supports'            => ['title', 'editor', 'thumbnail', 'page-attributes', 'custom-fields' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
          'taxonomies'          => ['cases_types', 'cases_services'],
          'has_archive'         => false,
          'rewrite'             => true,
          'query_var'           => true,
        ] );
      }   
      
      register_custom_post_types();

      /* ==============================================
      ********  //Регистрация кастомных таксономий 
      =============================================== */
      function register_custom_taxonomy () {
        // Тип
        register_taxonomy( 'cases_types', [ 'cases' ], [ 
          'label'                 => '', // определяется параметром $labels->name
          'labels'                => [
            'name'              => 'Тип',
            'singular_name'     => 'Тип',
            'search_items'      => 'Найти тип',
            'all_items'         => 'Все типы',
            'view_item '        => 'Посмотреть тип',
            'parent_item'       => 'Родительский тип',
            'parent_item_colon' => 'Родительский тип:',
            'edit_item'         => 'Редактировать тип',
            'update_item'       => 'Обновить тип',
            'add_new_item'      => 'Добавить новый тип',
            'new_item_name'     => 'Имя нового типа',
            'menu_name'         => 'Типы',
          ],
          'description'           => 'Тип кейсов', // описание таксономии
          'public'                => false,
          'publicly_queryable'    => false, // равен аргументу public
          // 'show_in_nav_menus'     => true, // равен аргументу public
          'show_ui'               => true, // равен аргументу public
           'show_in_menu'          => true, // равен аргументу show_ui
          // 'show_tagcloud'         => true, // равен аргументу show_ui
          // 'show_in_quick_edit'    => null, // равен аргументу show_ui
          'hierarchical'          => true,
      
          'rewrite'               => true,
          //'query_var'             => $taxonomy, // название параметра запроса
          // 'capabilities'          => array(),
          // 'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
          // 'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
          'show_in_rest'          => true, // добавить в REST API
          // 'rest_base'             => null, // $taxonomy
          // '_builtin'              => false,
          //'update_count_callback' => '_update_post_term_count',
        ] );

        // Услуги
        register_taxonomy( 'cases_services', [ 'cases' ], [ 
          'label'                 => '', // определяется параметром $labels->name
          'labels'                => [
            'name'              => 'Услуги',
            'singular_name'     => 'Услуга',
            'search_items'      => 'Найти услугу',
            'all_items'         => 'Все услуги',
            'view_item '        => 'Посмотреть услугу',
            'parent_item'       => 'Родительская услуга',
            'parent_item_colon' => 'Родительская услуга:',
            'edit_item'         => 'Редактировать услугу',
            'update_item'       => 'Обновить усдугу',
            'add_new_item'      => 'Добавить новую услугу',
            'new_item_name'     => 'Имя новой услуги',
            'menu_name'         => 'Услуги',
          ],
          'description'           => 'Тип кейсов', // описание таксономии
          'public'                => false,
          'publicly_queryable'    => false, // равен аргументу public
          // 'show_in_nav_menus'     => true, // равен аргументу public
          'show_ui'               => true, // равен аргументу public
           'show_in_menu'          => true, // равен аргументу show_ui
          // 'show_tagcloud'         => true, // равен аргументу show_ui
          // 'show_in_quick_edit'    => null, // равен аргументу show_ui
          'hierarchical'          => true,
      
          'rewrite'               => true,
          //'query_var'             => $taxonomy, // название параметра запроса
          // 'capabilities'          => array(),
          // 'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
          // 'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
          'show_in_rest'          => true, // добавить в REST API
          // 'rest_base'             => null, // $taxonomy
          // '_builtin'              => false,
          //'update_count_callback' => '_update_post_term_count',
        ] );
      }   
    
      register_custom_taxonomy();
    }  
  endif;

  /* ==============================================
  ********  //Ссылка на логотип
  =============================================== */
  function get_custom_logo_url()
  {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    return $image[0];
  }

  /* ==============================================
  ********  //Фильтр polylang для добавления 
  ********  //перевоыдов непубликуемым таксономиям
  =============================================== */
  add_filter( 'pll_get_taxonomies', 'design_add_tax_to_pll', 10, 2 );
  
  function design_add_tax_to_pll( $taxonomies, $is_settings ) {
      if ( $is_settings ) {
        
      } else {
        $taxonomies['cases_types'] = 'cases_types';
        $taxonomies['cases_services'] = 'cases_services';
      }

      return $taxonomies;
  }

  /* ==============================================
  ********  //Вывод меню
  =============================================== */
  function design_show_menu($slug = '')
  {
    global $menu_name;

    $menu_name = !empty($slug) ? $slug : 'top_menu';

    get_template_part( 'templates/menu' );
  }

  /**
   * Создаем страницу настроек Design темы
   */
  add_action('admin_menu', 'design_add_theme_page');
  function design_add_theme_page(){
    add_options_page( 'Settings for Design 2.0 theme', 'Design 2.0', 'manage_options', 'design_slug', 'design_options_page_output' );
  }

  function design_options_page_output(){
    ?>
    <div class="wrap">
      <h2><?php echo get_admin_page_title() ?></h2>

      <form action="options.php" method="POST">
        <?php
          settings_fields( 'design_settings' );     // скрытые защитные поля
          do_settings_sections( 'design_page' ); // секции с настройками (опциями). У нас она всего одна 'term_of_use'
          submit_button();
        ?>
      </form>
    </div>
    <?php
  }

  /**
   * Регистрируем настройки.
   * Настройки будут храниться в массиве, а не одна настройка = одна опция.
   */
  add_action('admin_init', 'design_settings');
  function design_settings(){
    // параметры: $option_group, $option_name, $sanitize_callback
    register_setting( 'design_settings', 'design_settings_names', 'sanitize_callback' );

    // параметры: $id, $title, $callback, $page
    add_settings_section( 'design_settings_section', 'General settings', '', 'design_page' );

    // параметры: $id, $title, $callback, $page, $section, $args
    add_settings_field('design_recaptcha', 'Ключ сайта reCaptcha v3', 'fill_design_recaptcha', 'design_page', 'design_settings_section' );
  }

  ## Заполняем опцию 1
  function fill_design_recaptcha(){
    $val = get_option('design_settings_names');
    $val = $val ? $val['recaptcha'] : null;
  
    ?>
      <input type="text" name="design_settings_names[recaptcha]" value="<?php echo esc_attr( $val ) ?>" />
    <?php   
  }

  ## Очистка данных
  function sanitize_callback( $options ){
    // очищаем
    foreach( $options as $name => & $val ){
      if( $name == 'recaptcha' )
        $val = strip_tags( $val );
    }

    //die(print_r( $options )); // Array ( [input] => aaaa [checkbox] => 1 )

    return $options;
  }

  /* ==============================================
  ********  //Отправка письма на мейл
  =============================================== */
  add_action('wp_ajax_design_sendmail', 'design_sendmail');
  add_action('wp_ajax_nopriv_design_sendmail', 'design_sendmail');

  function design_sendmail () {
    try {
      if($_POST['antibot'] == 1) {
        check_ajax_referer('design_nonce', 'security');
    
        if (isset($_POST['email']) && empty($_POST['email'])) {
          $response = [
            'name' => 'email',
            'error' => __('Укажите эл.  почту', 'design')
          ];
          
          wp_send_json_error( $response );
      
          die();
        }
        
        if (isset($_POST['name']) && empty($_POST['name'])) {   
          $response = [
            'name' => 'name',
            'error' => __('Укажите имя', 'design')
          ];
          
          wp_send_json_error( $response );
      
          die();
        }
        
        $contactSubject = isset($_POST['subject']) ? esc_html( $_POST['subject'] ) : __('Контактная форма', 'design');
        $contactName = isset($_POST['name']) ? ('<p>Имя - ' . esc_html( $_POST['name'] ) . '</p>') : '';
        $contactEmail = isset($_POST['email']) ? ('<p>Эл. почта - ' . esc_html( $_POST['email'] ) . '</p>') : '';
        $contactMessage = isset($_POST['message']) ? ('<p>Сообщение - ' . esc_html( $_POST['message'] ) . '</p>') : '';
        
        $contactMail = $contactName . $contactEmail . $contactMessage;
    
        $dev_mail = 'e.a.kiseljova@gmail.com'; 
        // разработка
        // $to = (isset($_POST['mailto']) && !empty($_POST['mailto'])) ? 
        //   [esc_html( $_POST['mailto'] ), $dev_mail] : 
        //   ((get_option('admin_email') !== $dev_mail) ? 
        //   [get_option('admin_email'), $dev_mail] : 
        //   get_option('admin_email'));
        
        // продакшн
        $to = (isset($_POST['mailto']) && !empty($_POST['mailto'])) ? 
          [esc_html( $_POST['mailto'] ), get_option('admin_email')] : get_option('admin_email');
    
        $site_name = 'From: ' . get_bloginfo( 'name' ) . ' <' . get_option('admin_email') . '>';
    
        // удалим фильтры, которые могут изменять заголовок $headers
        remove_all_filters( 'wp_mail_from' );
        remove_all_filters( 'wp_mail_from_name' );
    
        $headers = array(
          $site_name,
          'content-type: text/html',
        );
    
        wp_mail( $to, $contactSubject, $contactMail, $headers );
    
        $response = [
          'post' => $_POST,
          'mail' => $contactMail,
          'mailto' => $to,
        ];
    
        wp_send_json_success($response);
    
        die();
      } else {
        wp_send_json_error([
          'message' => __('Подтвердите, что Вы не робот', 'design')
        ] );
      }   
  
      die();
    } catch (\Throwable $th) {
      wp_send_json_error( [
        'message' => $th
      ] );

      die();
    }    
  }
?>