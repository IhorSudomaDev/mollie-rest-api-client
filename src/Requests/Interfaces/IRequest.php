<?php

namespace MollieRestApiClient\Requests\Interfaces;

/*** Interface IRequest */
interface IRequest
{
	/*** @return string */
	public function getUrl(): string;

	/*** @return array */
	public function getData(): array;
}