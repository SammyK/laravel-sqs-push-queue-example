<?php namespace Acme;

class ExampleWorker {

    /**
     * Process the resource
     *
     * @param $job
     * @param $data
     * @return null
     */
    public function fire($job, $data)
    {
    	// Save payload to file for review
        \File::append(storage_path().'/sqs_pushes.txt', print_r($data, true).PHP_EOL);

        // Finished!
        $job->delete();
    }

}

