<?php

declare(strict_types=1);

use Behat\Behat\Context\Context;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use LaSalle\ChupiProject\Test\Module\Color\Domain\Value\ColorsStub;
use LaSalle\ChupiProject\Test\Module\CoolWord\Domain\Value\WordsStub;

final class FeatureContext implements Context
{
    /** @var \GuzzleHttp\Psr7\Response */
    private $lastResponse;
    private $lastStatusCode;

    /**
     * @Given /^I do a "([^"]*)" request to "([^"]*)"$/
     */
    public function iDoARequestTo(string $method, string $uri)
    {
        $client = new Client(['base_uri' => 'http://localhost:8080']);

        try {
            $this->lastResponse = $client->request($method, $uri);
            $this->lastStatusCode = $this->lastResponse->getStatusCode();

        } catch (GuzzleException $e) {
            $this->lastResponse   = $e->getTraceAsString();
            $this->lastStatusCode = $e->getCode();

        }


    }

    /**
     * @Then /^The response code should be "([^"]*)"$/
     * @throws Exception
     */
    public function theResponseCodeShouldBe(int $responseCode)
    {
        if ($responseCode !== $this->lastStatusCode) {
            throw new Exception("Response code $responseCode is not the same as the api $this->lastStatusCode");
        }
    }

    /**
     * @Given /^The response should be a random color from InMemoryColorRepository$/
     * @throws Exception
     */
    public function theResponseShouldBeARandomColorFromInMemoryColorRepository()
    {
        $value = json_decode($this->lastResponse->getBody()->getContents(),true);
        if (!in_array($value["valor"],ColorsStub::allColorNamesInMemory())) {
            throw new Exception("Color obtained doesn't exist in array");
        }
    }

    /**
     * @Given /^The response should be a random word from InMemoryCoolWordRepository$/
     * @throws Exception
     */
    public function theResponseShouldBeARandomWordFromInMemoryCoolWordRepository()
    {
        $value = json_decode($this->lastResponse->getBody()->getContents(),true);
        if (!in_array($value["valor"],WordsStub::allWordNamesInMemory())) {
            throw new Exception("Words obtained doesn't exist in array");
        }
    }

}