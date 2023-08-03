<?php

namespace Devi\Admin\Helpers;

use Devi\User\Repositories\UserRepository;

class Dashboard
{
    /**
     * Create a new helper instance.
     *
     * @param  \Devi\Lead\Repositories\LeadRepository  $leadRepository
     * @param  \Devi\Lead\Repositories\PipelineRepository  $pipelineRepository
     * @param  \Devi\Lead\Repositories\ProductRepository  $leadProductRepository
     * @param  \Devi\Quote\Repositories\QuoteRepository  $quoteRepository
     * @param  \Devi\Product\Repositories\ProductRepository  $productRepository
     * @param  \Devi\Product\Repositories\PersonRepository  $personRepository
     * @param  \Devi\Product\Repositories\ActivityRepository  $activityRepository
     * @param  \Devi\Product\Repositories\UserRepository  $userRepository
     * @param  \Devi\Email\Repositories\EmailRepository  $emailRepository
     * @return void
     */
    public function __construct(
       protected UserRepository $userRepository,
    ) {
    }

}
