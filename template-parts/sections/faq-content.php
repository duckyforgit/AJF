<?php
/**
 * The template part for displaying FAQs
 *
 *  
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 *
 *
 * schema-faq: class for the block itself
 * schema-faq-title: class for the title of the block
 * schema-faq-section: section holding the question and answer
 * ‘schema-faq-question: class for the actual question
 * schema-faq-answer: class for the answer
 *
 * Note:  add collapsible header - accordion
 * For client: Google is trying to match a question from a searcher to an answer from a source. If you mark up your questions and answers with Question structured data, you tell search engines that this little sentence is a question and that this paragraph is its answer. Paragraph-based content is all the rage. One of the reasons? The advent of voice search. Google is looking for easy to understand, block-based content that it can use to answer searchers questions right in the search engine — or by speaking it out loud. Using the brand-spanking new Schema property speakable might even speed up this content discovery by determining which part of the content is fit for text-to-speech conversion.  Use structured data content blocks in Yoast SEO in admin.
 *
 * steps:
	 * Step 1: Open WordPress’ new Gutenberg editor
	 * Make a page in WordPress, add a title and an introductory 
	 * paragraph. Now add the FAQ structured data content block. You can 
	 * find the Yoast SEO structured data content blocks inside the Add 
	 * Block modal. Scroll all the way down to find them or type ‘FAQ’ in * the search bar, which I’ve highlighted in the screenshot below.
 *
 * 
	Step 2: Add questions and answers
	After you’ve added the FAQ block, you can start to add questions and answers to it. Keep in mind that these questions live inside the FAQ block. It’s advisable to keep the content related to each other so you can keep the page clean and focused. So no throwing in random questions.

	Step 3: Keep filling, check and publish
	After adding the first question and answering it well, keep adding the rest of your questions and answers until you’ve filled your FAQ page. In the screenshot below you see two questions filled in. I’ve highlighted two buttons, the Add Image button and the Add Question. These speak for throwingemselves.

	Run your new FAQ page through Structured Data Testing Tool to see what it looks like for Google. Yoast SEO should generate valid structured data for your FAQ page. 

	It’s basically built up like this. The context surrounding the questions is an FAQPage Schema graph. Every question gets a Question type and an acceptedAnswer with an answer type. That sounds hard, but it’s not. All you have to do is fill in the Question and the Answer and you’re good to go! Let’s break it down:

	context is Schema.org of course
	type is an FAQPage
	name of the page
	mainEntity: This contains the questions and answers
	type: Question
	name: The question as written by you
	answerCount: The number of answers counted. In our case that’s only one, but this will change if you have a Quora type of site where people can send in their own answers
	acceptedAnswer: The answer that will show in search
	type: Answer
	text: The written answer for the question in this block
	This translates to the code below as generated automatically by the Yoast SEO structured data content blocks. Now, Google will immediately see that this piece of content contains a question with an accepted answer. If you’re lucky, this might eventually lead to a featured snippets or another type of cool rich result.

	script type="application/ld+json">
    {
        "@context": "https:\/\/schema.org",
        "@type": "FAQPage",
        "name": "new content blocks",
        "mainEntity": [{
            "@type": "Question",
            "name": "What is SEO?",
            "answerCount": 1,
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "SEO is the acronym for Search Engine Optimization. It's the practice of optimizing websites to make them reach a high position in Google's - or another search engine's - search results. SEO focuses on rankings in the organic (non-paid) search results."
            }
        }, {
            "@type": "Question",
            "name": "What is crawlability?",
            "answerCount": 1,
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Crawlability has to do with the possibilities Google has to crawl your website. Crawlers can be blocked from your site. There are a few ways to block a crawler from your website. If your website or a page on your website is blocked, you're saying to Google's crawler: "do not come here". Your site or the respective page won't turn up in the search results in most of these cases."
            }
        }]
    }
</script>
 */

?>
<div class="schema-faq wp-block-yoast-faq-block">
<h2 class="schema-faq-title" id="frequently-asked-questions">The title</h2>
    <div class="schema-faq-section">
        <strong class="schema-faq-question">The question</strong>
        The answer
    </div>
</div>