<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Web_css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>U.S. Presidents</title>
    <style>
        /* Ensure your custom font is applied globally */
        body {
            font-family: 'YourFontFamily', sans-serif; /* Replace 'YourFontFamily' with the actual font name */
        }

        /* Ensure paragraphs are justified on desktop screens */
        @media (min-width: 992px) {
            .lead {
                text-align: justify;
            }
        }

        /* Center text for mobile screens */
        @media (max-width: 991px) {
            .lead {
                text-align: justify;
            }
        }
    </style>
</head>
<body class="displays-4 text-center">

    <?php include("About_president.html"); ?>

    <section class="home py-5">
        <div class="container">
            <div class="home_content">
                <h1 class="display-4">
                    Presidents of the <span>United States</span>
                </h1>

                <h3 class="typing-text">
                    A journey through the lives and legacies of the U.S. Presidents
                </h3>

                <div class="section-heading my-4">
                    <h2 class="h2">George Washington (1789–1797)</h2>
                </div>
                <p class="lead">
                    George Washington, the first President of the United States, is known as the "Father of His Country." He led the Continental Army to victory during the American Revolution and presided over the Constitutional Convention of 1787. Washington set many presidential precedents, including the two-term limit and the establishment of a cabinet. His leadership helped lay the foundation for the U.S. government.
                </p>

                <div class="section-heading my-4">
                    <h2 class="h2">Thomas Jefferson (1801–1809)</h2>
                </div>
                <p class="lead">
                    Thomas Jefferson, the third President, is remembered for his role in the Louisiana Purchase and the Lewis and Clark Expedition, which doubled the size of the U.S. He was a strong advocate for individual rights and is the principal author of the Declaration of Independence. Jefferson's presidency helped define the young nation's democratic principles.
                </p>

                <div class="section-heading my-4">
                    <h2 class="h2">Abraham Lincoln (1861–1865)</h2>
                </div>
                <p class="lead">
                    Abraham Lincoln, the 16th President, is revered for his leadership during the Civil War. He issued the Emancipation Proclamation, which abolished slavery in the Confederacy, and delivered the Gettysburg Address, emphasizing national unity. Lincoln's determination preserved the Union and laid the groundwork for the Civil Rights movement.
                </p>

                <div class="section-heading my-4">
                    <h2 class="h2">Theodore Roosevelt (1901–1909)</h2>
                </div>
                <p class="lead">
                    Theodore Roosevelt, the 26th President, is known for his progressive policies, trust-busting efforts, and his role in expanding the national parks system. He championed the construction of the Panama Canal and was awarded the Nobel Peace Prize for his mediation in the Russo-Japanese War, marking the U.S.'s growing role on the world stage.
                </p>

                <div class="section-heading my-4">
                    <h2 class="h2">Franklin D. Roosevelt (1933–1945)</h2>
                </div>
                <p class="lead">
                    Franklin D. Roosevelt, the 32nd President, served an unprecedented four terms and led the nation through the Great Depression and World War II. His New Deal programs helped to pull the U.S. out of the Great Depression, and his leadership during World War II established the U.S. as a global superpower. Roosevelt's legacy continues to shape American policy and politics.
                </p>

                <div class="section-heading my-4">
                    <h2 class="h2">John F. Kennedy (1961–1963)</h2>
                </div>
                <p class="lead">
                    John F. Kennedy, the 35th President, is remembered for his inspirational speeches and vision for a "New Frontier." His administration faced key moments in the Cold War, such as the Cuban Missile Crisis and the space race. Tragically, Kennedy was assassinated in 1963, but his legacy continues to inspire generations of Americans.
                </p>

                <div class="section-heading my-4">
                    <h2 class="h2">Ronald Reagan (1981–1989)</h2>
                </div>
                <p class="lead">
                    Ronald Reagan, the 40th President, brought conservative principles back to the forefront of American politics. He is credited with reviving the American economy, championing free-market policies, and playing a key role in the Cold War's conclusion. Reagan’s presidency left a lasting impact on both domestic and foreign policy.
                </p>

                <div class="section-heading my-4">
                    <h2 class="h2">Barack Obama (2009–2017)</h2>
                </div>
                <p class="lead">
                    Barack Obama, the 44th President, made history as the first African American to hold the office. His administration passed the Affordable Care Act (Obamacare), which aimed to provide universal health coverage. Obama also oversaw the recovery from the Great Recession, and his foreign policy included the withdrawal of U.S. troops from Iraq and the operation that led to the death of Osama bin Laden.
                </p>

                <div class="section-heading my-4">
                    <h2 class="h2">Donald Trump (2017–2021)</h2>
                </div>
                <p class="lead">
                    Donald Trump, the 45th President, was a businessman and television personality before entering politics. His presidency was marked by strong stances on immigration, trade, and foreign policy, particularly with regard to China and North Korea. Trump's time in office was also characterized by significant political polarization and controversy.
                </p>

                <div class="section-heading my-4">
                    <h2 class="h2">Joe Biden (2021–present)</h2>
                </div>
                <p class="lead">
                    Joe Biden, the 46th and current President, took office amidst the COVID-19 pandemic and a politically divided nation. His administration has focused on pandemic response, economic recovery, and climate change policies. Biden has worked on rebuilding international alliances and advocating for the protection of voting rights and healthcare reforms.
                </p>

                <div class="section-heading my-4">
                    <h2 class="h2">Conclusion</h2>
                </div>
                <p class="lead">
                    The Presidents of the United States have shaped the nation's history through their leadership, decisions, and policies. From the nation's founding to its rise as a global superpower, the contributions of each president are pivotal to understanding the evolution of the U.S. Every president has left a unique mark on the country, influencing its political, social, and cultural landscape.
                </p>

                <?php include("DATAS.html"); ?>
            </div>
        </div>
    </section>

</body>
</html>
