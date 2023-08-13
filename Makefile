PROJECTPATH := $(shell pwd -P)
PROJECTNAME := mysite

initialize-infra:
	@echo "⏳ Initializing infrastructure..."
	@echo "⏳ Creating data directories at infrastructure/data/..."
	@mkdir -p "${PROJECTPATH}/infrastructure/data/mysql" \
	&& mkdir -p "${PROJECTPATH}/infrastructure/data/uploads" \
	&& echo "✅ Data directories created." \
	|| echo "🔥 Permission error. Can't create directories in infrastructure/data..."

ensure-env-is-present:
	@if [[ ! -f .env ]]; then echo "❌ .env file does not exist. Copy .env.example and fill it first"; exit 1; fi

build: ensure-env-is-present
	sudo docker compose -p "${PROJECTNAME}" -f docker-compose.yaml build

run: ensure-env-is-present deps
	sudo docker compose -p "${PROJECTNAME}" -f docker-compose.yaml up --remove-orphans -d

stop: ensure-env-is-present
	sudo docker compose -p "${PROJECTNAME}" -f docker-compose.yaml down --remove-orphans

restart: stop run

run-local: ensure-env-is-present deps
	sudo docker compose -p "${PROJECTNAME}" -f docker-compose.yaml -f docker-compose-local.yaml up --remove-orphans

stop-local: ensure-env-is-present deps
	sudo docker compose -p "${PROJECTNAME}" -f docker-compose.yaml -f docker-compose-local.yaml down --remove-orphans

restart-local: stop-local run-local

deps:
	sudo docker run --rm -v "${PROJECTPATH}":/app --workdir="/app" "${PROJECTNAME}-php" php composer.phar install
