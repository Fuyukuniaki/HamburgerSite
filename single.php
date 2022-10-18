    <?php get_header(); ?>
        <main class="l-main l-main__Single c-grid__FrontPage-main c-background__Single--main">
            <section class="p-section__MainSingle--title c-background__MainSingle--title">
                <h1 class="c-text-color__MainTitle c-text-size__MainSingle--mainTitle c-margin__MainSingle--mainTitle c-customize__Text--h1"><?php the_title(); ?></h1>
            </section>
            <section class="wp-section__SingleText">
            <?php
                if( have_posts() ) :
                    while( have_posts() ) :
                        the_post(); ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php the_content(); ?>
                            <?php $args = array (
                                'before' => '<div class="page-split">',
                                'after' => '</div>',
                                'link_before' => '<span>',
                                'link_after' => '</span>',
                                );
                                wp_link_pages( $args );
                            ?>
                        </div>

                    <?php endwhile;
                else :
                ?><article class="p-articles__ArchiveText c-margin__ArchiveText c-text-color__ArchiveText">
                <h2 class="c-text-weight--bold c-text-size__ArchiveText--title c-margin__ArchiveText--title">表示する記事がありません</h2>
                </article><?php
                endif; ?>

                <!-- <h2 class="c-customize__Text--h2">見出しh2</h2>
                <p class="c-customize__Text--p">Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                <h3 class="c-customize__Text--h3">見出しh3</h3>
                <h4 class="c-customize__Text--h4">見出しh4</h4>
                <h5 class="c-customize__Text--h5">見出しh5</h5>
                <h6 class="c-customize__Text--h6">見出しh6</h6>
                <blockquote  class="c-customize__Blockquote">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                    <p class="c-customize__Blockquote--p">出典元： <a class="c-customize__Blockquote--a" href="#">○○○○○○○○○○○○</a></p>
                </blockquote>
                <div class="c-customize__Image--wide">
                    <img class="c-size__Single--image--wide" src="/wp-content/uploads/cooked-foods.png" alt="">
                </div>
                <dl class="c-customize__MediaBlock--mediaLeft">
                    <dd class="c-customize__MediaBlock--media">
                        <img class="c-size__Single--image" src="/wp-content/uploads/cooked-foods.png" alt="">
                    </dd>
                    <dd class="c-customize__MediaBlock--text">
                        <p class="c-customize__Text--p">テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                    </dd>
                </dl>
                <dl class="c-customize__MediaBlock--mediaRight">
                    <dd class="c-customize__MediaBlock--text">
                        <p class="c-customize__Text--p">テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                    </dd>
                    <dd class="c-customize__MediaBlock--media">
                        <img class="c-size__Single--image" src="/wp-content/uploads/cooked-foods.png" alt="">
                    </dd>
                </dl>
                <div class="c-customize__Image--center">
                    <img class="c-size__Single--image" src="/wp-content/uploads/cooked-foods.png" alt="">
                </div>
                <dl class="c-customize__Image--gallery">
                    <dd class="c-customize__Image--gallery--image">
                        <img class="c-size__Single--image--gallery" src="/wp-content/uploads/cooked-foods.png" alt="">
                    </dd>
                    <dd class="c-customize__Image--gallery--image">
                        <img class="c-size__Single--image--gallery" src="/wp-content/uploads/cooked-foods.png" alt="">
                    </dd>
                    <dd class="c-customize__Image--gallery--image">
                        <img class="c-size__Single--image--gallery" src="/wp-content/uploads/cooked-foods.png" alt="">
                    </dd>
                    <dd class="c-customize__Image--gallery--image">
                        <img class="c-size__Single--image--gallery" src="/wp-content/uploads/cooked-foods.png" alt="">
                    </dd>
                    <dd class="c-customize__Image--gallery--image">
                        <img class="c-size__Single--image--gallery" src="/wp-content/uploads/cooked-foods.png" alt="">
                    </dd>
                    <dd class="c-customize__Image--gallery--image">
                        <img class="c-size__Single--image--gallery" src="/wp-content/uploads/cooked-foods.png" alt="">
                    </dd>
                    <dd class="c-customize__Image--gallery--image">
                        <img class="c-size__Single--image--gallery" src="/wp-content/uploads/cooked-foods.png" alt="">
                    </dd>
                    <dd class="c-customize__Image--gallery--image">
                        <img class="c-size__Single--image--gallery" src="/wp-content/uploads/cooked-foods.png" alt="">
                    </dd>
                    <dd class="c-customize__Image--gallery--image">
                        <img class="c-size__Single--image--gallery" src="/wp-content/uploads/cooked-foods.png" alt="">
                    </dd>
                </dl>
                <ol class="c-customize__List--order">
                    <li class="c-customize__List">リストリストリスト</li>
                    <li class="c-customize__List">リストリストリスト
                        <ol class="c-customize__List--order--sub">
                            <li class="c-customize__List">リスト2リスト2リスト2</li>
                            <li class="c-customize__List">リスト2リスト2リスト2</li>
                        </ol>
                    </li>
                </ol>
                <ol class="c-customize__List--order">
                    <li class="c-customize__List">リストリストリスト</li>
                    <li class="c-customize__List">リストリストリスト</li>
                </ol>
                <ul class="c-customize__List--regular">
                    <li class="c-customize__List">リストリストリスト</li>
                    <li class="c-customize__List">リストリストリスト
                        <ul class="c-customize__List--regular--sub">
                            <li class="c-customize__List">リストリストリスト</li>
                            <li class="c-customize__List">リストリストリスト</li>
                        </ul>
                    </li>
                </ul>
                <ul class="c-customize__List--regular">
                    <li class="c-customize__List">リストリストリスト</li>
                    <li class="c-customize__List">リストリストリスト</li>
                </ul>
                <pre class="c-customize__Code--pre">
                    <code class="c-customize__Code">
                    &lt;html&gt;
                        &lt;head&gt;
                        &lt;/head&gt;
                        &lt;body&gt;
                        &lt;/body&gt;
                    &lt;/html&gt;
                    </code>
                </pre>
                <table class="c-customize__Table">
                    <tr class="c-customize__Table--tr">
                        <td class="c-customize__Table--td">テーブル</td><td class="c-customize__Table--td">テーブル</td>
                    </tr>
                    <tr class="c-customize__Table--tr">
                        <td class="c-customize__Table--td">テーブル</td><td class="c-customize__Table--td">テーブル</td>
                    </tr>
                    <tr class="c-customize__Table--tr">
                        <td class="c-customize__Table--td">テーブル</td><td class="c-customize__Table--td">テーブル</td>
                    </tr>
                    <tr class="c-customize__Table--tr">
                        <td class="c-customize__Table--td">テーブル</td><td class="c-customize__Table--td">テーブル</td>
                    </tr>
                </table>
                <button class="c-customize__Button">ボタン</button>
                <p class="c-customize__Text"><b class="c-customize__Text--bold">boldboldboldboldboldboldbold</b></p> -->
            </section>
        </main>

        <?php get_template_part( 'footer', 'page' ); ?>
        <?php get_sidebar(); ?>

    <?php get_footer(); ?>