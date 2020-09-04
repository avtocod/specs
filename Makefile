#!/usr/bin/make
# Makefile readme (ru): <http://linux.yaroslavl.ru/docs/prog/gnu_make_3-79_russian_manual.html>
# Makefile readme (en): <https://www.gnu.org/software/make/manual/html_node/index.html#SEC_Contents>

dc_bin := $(shell command -v docker-compose 2> /dev/null)
docker_bin := $(shell command -v docker 2> /dev/null)

SHELL = /bin/sh
RUN_ARGS = --rm --user "$(shell id -u):$(shell id -g)"

.PHONY : help lint install test shell
.DEFAULT_GOAL : help

# This will output the help for each task. thanks to https://marmelab.com/blog/2016/02/29/auto-documented-makefile.html
help: ## Show this help
	@printf "\033[33m%s:\033[0m\n" 'Available commands'
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "  \033[32m%-14s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

lint: ## Execute linters
	$(docker_bin) run --rm \
		-v "$(shell pwd)/CHANGELOG.md:/CHANGELOG.md:ro" \
		avtodev/markdown-lint:v1 \
		--rules /lint/rules/changelog.js --config /lint/config/changelog.yml /CHANGELOG.md

install: ## Install all dependencies
	$(dc_bin) run $(RUN_ARGS) node yarn install

test: ## Execute tests and linters
	$(dc_bin) run $(RUN_ARGS) node yarn test

shell: ## Start shell into container with node
	$(dc_bin) run $(DC_RUN_ARGS) node sh
