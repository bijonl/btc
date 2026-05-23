<?php
// demo.php - placeholder stats demo

$demo_stats = [
    ['number' => '150+', 'content' => 'Projects Completed'],
    ['number' => '75+', 'content' => 'Happy Clients'],
    ['number' => '25', 'content' => 'Awards Won'],
    ['number' => '10+', 'content' => 'Years of Experience']
];
?>

<section <?php echo pw_block_section_classes($block); ?>>
    <div class="stats-container container">
        <div class="stats-row row row-cols-1 row-cols-lg-4" role="list">
            <?php foreach($demo_stats as $index => $stat): 
                $stat_id = 'demo-stat-' . ($index + 1); ?>
                <div class="stats-col col mx-auto text-center u-focus-style" role="listitem">
                    <div class="single-stat-wrapper">
                        <div class="stat-title-wrapper">
                            <h4 class="mb-0"><?php echo esc_html($stat['number']); ?></h4>
                        </div>
                        <div class="stat-content-wrapper">
                            <p class="mb-0"><?php echo esc_html($stat['content']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="button-row row">
            <div class="button-col mx-auto text-center">
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>
</section>
